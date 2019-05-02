<?php
/**
 * @file
 * Contains \Drupal\cpr_extension\Form\ReportForm.
 */
namespace Drupal\cpr_extension\Form;

use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;

class ReportForm extends FormBase {
  protected $step = 1;
  protected $report_node = '';
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cpr_report_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#attached']['library'][] = 'core/drupal.dialog.ajax';
    $form['#attached']['library'][] = 'core/drupal.ajax';
    $form['errors_wrapper'] = [
      '#type' => 'container',
      '#attributes' => [
        'id' => 'errors-wrapper',
        'class' => ['alert-wrapper'],
      ],
      '#weight' => 0,
    ];

    // First step - case info and details.
    if ($this->step == 1) {
      $form['subject'] = [
        '#type' => 'textfield',
        '#title' =>$this->t('Subject'),
        '#placeholder' =>$this->t('Subject'),
        '#required' => TRUE,
      ];
      $form['description'] = [
        '#type' => 'textarea',
        '#title' =>$this->t('Description'),
        '#placeholder' =>$this->t('Descrition case'),
        '#required' => TRUE,
      ];
      $form['additional_file_title'] = [
        '#markup' =>$this->t('<p class="col-auto">Feel free to upload photos or videos of situations you encountered</p>'),
      ];

      $form['additional_file'] = [
        '#type' => 'managed_file',
        '#title' =>$this->t('Additional files'),
        // @todo: Check if the file should be public/private and set this up accordingly.
        '#upload_location' => 'public://report_files',
        '#upload_validators' => [
          'file_validate_extensions' => ['pdf doc docx txt jpg jpeg png mp4'],
        ],
        '#required' => FALSE,
      ];

      $form['additional_file']['label'] = [
        '#type' => 'html_tag',
        '#tag' => 'label',
        '#value' => t('Upload'),
        '#attributes' => [
          'for' => 'edit-additional-file-upload',
          'class' => 'btn-upload js-btn-upload'
        ]
      ];

      $form['additional_file']['info'] = [
        '#type' => 'html_tag',
        '#tag' => 'span',
        '#value' => t('Max file size: 50 MB'),
        '#attributes' => [
          'class' => 'btn-upload--info'
        ]
      ];

      $form['do_not_publish'] = [
        '#type' => 'checkbox',
        '#title' =>$this->t('I don\'t want my report to become public'),
      ];


      $form['actions']['#type'] = 'actions';
      $form['actions']['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Submit'),
        '#ajax' => [
          'callback' => '::nextStepModal'
        ],
        '#attributes' => [
          'class' => ['btn--to-dark'],
        ],
      ];
    }

    // Second step - get more info regarding the reporter.
    if ($this->step == 2) {
      $form['info_thank_you'] = [
        '#type' => 'container',
        '#attributes' => array(
          'class' => 'report-form__info--thanks',
        )
      ];

      $form['info_thank_you']['thank_you_title'] = [
        '#markup' =>$this->t('<h2 class="">Thank you very much!</h2>' . '
                                    <h2 class="">Your input means a lot to us.</h2>'),
      ];

      $form['info_thank_you']['thank_you'] = [
        '#markup' =>$this->t('
                  <p>We will take a look at your report and make it public as soon as possible.</p>' . '
                  <p>In case we have additional questions regarding your report, can we contact you?  Don’t worry -
                      we take your privacy very seriously. We will not share your details.</p>' . '
                  <p>You will also get a notification with the link to your report once it becomes public.</p>'),
      ];

      $form['info'] = [
        '#type' => 'container',
        '#attributes' => array(
          'class' => 'report-form-fields',
        ),
      ];

      $form['info']['name'] = [
        '#type' => 'textfield',
        '#title' =>$this->t('Name'),
        '#placeholder' =>$this->t('Name'),
        '#class' => 'form-control',
        '#required' => FALSE,
      ];

      $form['info']['surname'] = [
        '#type' => 'textfield',
        '#title' =>$this->t('Surname'),
        '#placeholder' =>$this->t('Surname'),
        '#class' => 'form-control',
        '#required' => FALSE,
      ];

      $form['info']['email'] = [
        '#type' => 'email',
        '#title' =>$this->t('Email'),
        '#placeholder' => $this->t('Email'),
        '#class' => 'form-control',
        '#required' => FALSE,
      ];

      $form['info']['actions']['#type'] = 'actions';
      $form['info']['actions']['submit'] = [
        '#attributes' => [
          'class' => ['btn--to-dark']
        ],
        '#type' => 'submit',
        '#value' => $this->t('Submit info'),
        '#button_type' => 'primary',

        // @todo: Uncomment for 3rd step to work.
        // '#ajax' => [
        //   'callback' => '::nextStepModal'
        // ],
      ];

      $form['link-community'] = [
        '#type' => 'container',
        '#attributes' => array(
          'class' => 'report-form-community',
        ),
      ];

      // Get involved link.
      $url = Url::fromUserInput('/be-involved');
      $link_options = array(
        'attributes' => array(
          'class' => array(
            'btn',
            'btn-primary',
            'btn--to-dark',
          ),
        ),
      );
      $url->setOptions($link_options);
      $involved_link = Link::fromTextAndUrl($this->t('Join our community'), $url)->toString();
      $form['link-community']['#markup'] = $involved_link;
    }

    // @todo: Enable third step if needed.
    // Third step - Agreement details.
    // if ($this->step == 3) {
    //   // Implement loading content from a specific node and show it here.
    //   $form['agreement']['#markup'] = $this->t('I agree to these rules:');

    //   $form['actions']['#type'] = 'actions';
    //   $form['actions']['submit'] = [
    //     '#type' => 'submit',
    //     '#value' => $this->t('I agree'),
    //     '#button_type' => 'primary',
    //   ];
    // }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Create the report node with all provided values.
    if ($this->step == 1) {
      // Create a new report node - set the internal id afterwards.
      // Create node object with attached file.
      $node_fields = [
        'type'  => 'report',
        'title' => $form_state->getValue('subject'),
        'field_description' => $form_state->getValue('description'),
        'field_do_not_publish_the_report' => $form_state->getValue('do_not_publish'),
        'uid'   => 0,
      ];

      // Check for file and add one if needed.
      $form_file = $form_state->getValue('additional_file', 0);
      if (isset($form_file[0]) && !empty($form_file[0])) {
        $file = File::load($form_file[0]);
        $file->setPermanent();
        $file->save();
        $node_fields['field_file']['target_id'] = $file->id();
      }
      $node = Node::create($node_fields);
      $node->save();
      $form_state->setRebuild();
      $this->report_node = $node;
    }

    // Update the node if we have additional data.
    if ($this->step == 2) {
      $values = [
        'field_name'    => $form_state->getValue('name', ''),
        'field_surname' => $form_state->getValue('surname', ''),
        'field_e_mail'  => $form_state->getValue('email', ''),
      ];
      foreach ($values as $field_name => $value) {
        if (!empty($value)) {
          $this->report_node->{$field_name}->value = $value;
        }
      }
      $this->report_node->save();
      // @todo: Uncomment for 3rd step to work.
      // $form_state->setRebuild();
      // Set a message here that will be shown to the user - all data is saved.
      // drupal_set_message($this->t('Your application  with id @id will be updated!', array('@id' => $this->report_node->id())));
    }

    // @todo: Enable step if needed.
    // Agreement is done - back to homepage.
    // if ($this->step == 3) {
    //   // Redirect to home page after agreement is done.
    //   $response = new RedirectResponse(\Drupal::url('<front>', [], ['absolute' => TRUE]));
    //   $request = \Drupal::request();
    //   $request->getSession()->save();
    //   $response->prepare($request);
    //   \Drupal::service('kernel')->terminate($request, $response);
    //   $response->send();
    // }

    // Increase the step until we're done.
    $this->step++;
  }

  // Check and open the next step in modal.
  public function nextStepModal(array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $title = '';
    $errors = $form_state->getErrors();
    // Validate required title + description fields and show errors inside the form.
    if ($this->step == 1 && !empty($errors)) {
      // Prepare the errors to be shown nicely inside the form
      $error_messages = '';
      $drupal_messages = \Drupal::messenger()->messagesByType('error');
      foreach ($drupal_messages as $message) {
        // @todo: Uncomment this if messages should be constructed based on actual form errors and not drupal errors.
        // $error_messages .= '<div class="alert alert-danger">' . t('Field @field is required.', ['@field' => $form[$field]['#title']]) . '</div>';
        $error_messages .= '<div class="alert alert-danger">' . $message . '</div>';
      }
      // Clear error messages from Drupal messenger and form_state
      \Drupal::messenger()->deleteByType('error');
      $form_state->clearErrors();
      $response->addCommand(new HtmlCommand('#errors-wrapper', $error_messages));
      return $response;
    }
    if ($this->step == 2) {
      // $title = 'Step 2 title if needed';
    }
    if ($this->step == 3) {
      // $title = 'Step 3 title if needed';
    }
    $response->addCommand(new OpenModalDialogCommand($title, $form, ['width' => '80%']));

    return $response;
  }
}