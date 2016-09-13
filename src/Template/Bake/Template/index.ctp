<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    })
    ->take(7);

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}
%>
<section class="content-header">
    <h1><?= __('<%= $pluralHumanName %>') ?></h1>
</section>
<div class="dropdown pull-right" style="margin:-50px 14px 0 0">
    <button class="btn btn-default dropdown-toggle" type="button" id="drpdwn" data-toggle="dropdown" aria-expanded="true">
        Action <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="drpdwn">        
        <li role="presentation"><?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('New <%= $singularHumanName %>'), ['action' => 'add'], ['escape' => false]) ?></li>
<%
    $done = [];
    foreach ($associations as $type => $data):
        foreach ($data as $alias => $details):
            if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
%>
        <li role="presentation"><?= $this->Html->link('<i class="fa fa-list-alt"></i> ' . __('List <%= $this->_pluralHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'index'], ['escape' => false]) ?></li>
        <li role="presentation"><?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('New <%= $this->_singularHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'add'], ['escape' => false]) ?></li>
<%
                $done[] = $details['controller'];
            endif;
        endforeach;
    endforeach;
%>
    </ul>
</div>
<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('<%= $pluralHumanName %> List') ?></h3>
        </div>
    </div>
    <div class="table-responsive">    
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="heading">
<% foreach ($fields as $field): %>
                <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
<% endforeach; %>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
            <tr>
<%        foreach ($fields as $field) {
            $isKey = false;
            if (!empty($associations['BelongsTo'])) {
                foreach ($associations['BelongsTo'] as $alias => $details) {
                    if ($field === $details['foreignKey']) {
                        $isKey = true;
%>
                <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
<%
                        break;
                    }
                }
            }
            if ($isKey !== true) {
                if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
%>
                <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
<%
                } else {
%>
                <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
<%
                }
            }
        }

        $pk = '$' . $singularVar . '->' . $primaryKey[0];
%>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', <%= $pk %>],['class' => 'btn btn-info','escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', <%= $pk %>],['class' => 'btn btn-success', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.<%= $pk %>,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                    <div id="modal-<?=<%= $pk %>?>" class="modal fade" tabindex="-1" data-width="660" style="display: none; max-height:175px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Delete Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <p><?= __('Are you sure you want to delete selected entry?') ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default"><?= __('No') ?></button>
                            <?= $this->Form->postLink(
                                    'Yes',
                                    ['action' => 'delete', <%= $pk %>],
                                    ['class' => 'btn btn-primary', 'escape' => false]
                                )
                            ?>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator" style="text-align:center;">
        <ul class="pagination">
        <?= $this->Paginator->prev('«') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('»') ?>
        </ul>
        <p class="hidden"><?= $this->Paginator->counter() ?></p>
    </div>
</section>
