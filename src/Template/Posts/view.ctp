<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id Sender') ?></th>
            <td><?= $this->Number->format($post->user_id_sender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id Receiver') ?></th>
            <td><?= $this->Number->format($post->user_id_receiver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('created') ?></th>
            <td><?= $post->created ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($post->content)); ?>
    </div>
</div>
