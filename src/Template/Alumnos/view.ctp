<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alumno'), ['action' => 'edit', $alumno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumno'), ['action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alumnos view large-9 medium-8 columns content">
    <h3><?= h($alumno->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($alumno->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellido') ?></th>
            <td><?= h($alumno->apellido) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($alumno->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($alumno->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($alumno->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($alumno->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Natricula') ?></th>
            <td><?= $this->Number->format($alumno->num_natricula) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Selectividad') ?></th>
            <td><?= $this->Number->format($alumno->nota_selectividad) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($alumno->fecha_nacimiento) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Proyectos') ?></h4>
        <?php if (!empty($alumno->proyectos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Num Paginas') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($alumno->proyectos as $proyectos): ?>
            <tr>
                <td><?= h($proyectos->id) ?></td>
                <td><?= h($proyectos->titulo) ?></td>
                <td><?= h($proyectos->num_paginas) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Proyectos', 'action' => 'view', $proyectos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Proyectos', 'action' => 'edit', $proyectos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proyectos', 'action' => 'delete', $proyectos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proyectos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
