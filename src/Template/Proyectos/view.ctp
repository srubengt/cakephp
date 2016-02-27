<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proyecto'), ['action' => 'edit', $proyecto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proyecto'), ['action' => 'delete', $proyecto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proyecto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proyectos view large-9 medium-8 columns content">
    <h3><?= h($proyecto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($proyecto->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Paginas') ?></th>
            <td><?= h($proyecto->num_paginas) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($proyecto->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Alumnos') ?></h4>
        <?php if (!empty($proyecto->alumnos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Apellido') ?></th>
                <th><?= __('Fecha Nacimiento') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Telefono') ?></th>
                <th><?= __('Num Natricula') ?></th>
                <th><?= __('Nota Selectividad') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proyecto->alumnos as $alumnos): ?>
            <tr>
                <td><?= h($alumnos->id) ?></td>
                <td><?= h($alumnos->nombre) ?></td>
                <td><?= h($alumnos->apellido) ?></td>
                <td><?= h($alumnos->fecha_nacimiento) ?></td>
                <td><?= h($alumnos->email) ?></td>
                <td><?= h($alumnos->telefono) ?></td>
                <td><?= h($alumnos->num_natricula) ?></td>
                <td><?= h($alumnos->nota_selectividad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Alumnos', 'action' => 'view', $alumnos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Alumnos', 'action' => 'edit', $alumnos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Alumnos', 'action' => 'delete', $alumnos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
