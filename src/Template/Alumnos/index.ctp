<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Alumnos
    <small>Listado de Alumnos</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>


<!-- Content -->
<section class="content">
<!-- DataTables -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= __('Alumnos') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabla_alumnos" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellido') ?></th>
                    <th><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('num_natricula') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumnos as $alumno): ?>
                    <tr>
                        <td><?= $this->Number->format($alumno->id) ?></td>
                        <td><?= h($alumno->nombre) ?></td>
                        <td><?= h($alumno->apellido) ?></td>
                        <td><?= h($alumno->fecha_nacimiento) ?></td>
                        <td><?= h($alumno->email) ?></td>
                        <td><?= h($alumno->telefono) ?></td>
                        <td><?= $this->Number->format($alumno->num_natricula) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $alumno->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumno->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th><?= __('id') ?></th>
                    <th><?= __('nombre') ?></th>
                    <th><?= __('apellido') ?></th>
                    <th><?= __('fecha_nacimiento') ?></th>
                    <th><?= __('email') ?></th>
                    <th><?= __('telefono') ?></th>
                    <th><?= __('num_matricula') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
            <!-- /.paginator -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
</section>
<!-- /.content -->
