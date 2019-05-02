<?php
/**
 * @file
 * Contains \Drupal\cpr_extension\Plugin\Block\ReportBlock.
 */
namespace Drupal\cpr_extension\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\Entity\Node;

/**
 * Provides a 'New report' Block.
 *
 * @Block(
 *   id = "cpr_extension_report_block",
 *   admin_label = @Translation("New CPR Report"),
 *   category = @Translation("CPR Blocks"),
 * )
 */
class ReportBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();
    // $form = \Drupal::formBuilder()->getForm('Drupal\cpr_extension\Form\ReportForm', $config['agreement_node']);
    $form = \Drupal::formBuilder()->getForm('Drupal\cpr_extension\Form\ReportForm');

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    // $config = $this->getConfiguration();

    // Node of type page with agreement text.
    // $agreement_node = Node::load($config['agreement_node']);
    // $form['agreement_node'] = [
    //   '#type' => 'entity_autocomplete',
    //   '#target_type' => 'node',
    //   '#target_bundles' => ['page'],
    //   '#title' => $this->t('Node with agreement text'),
    //   '#default_value' => $agreement_node,
    // ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    // $this->configuration['agreement_node'] = $form_state->getValue('agreement_node');
  }
}
