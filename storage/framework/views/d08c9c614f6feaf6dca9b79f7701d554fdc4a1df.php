<?php $__env->startSection('title', 'Lista de Comarcas'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="ion-ios-pricetags"> Lista de Comarcas</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Comarcas</li>
</ol>

		<?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

<!-- Tabela de lista de todas as comarcas cadastradas -->
    <div class="box box-primary">
	    <div class="box-header">
		    <a href="comarcas/criar" class="btn btn-success btn-sm"><i class="ion-person-add"></i> Adcionar Nova</a>

		    <div class="input-group input-group-sm pull-right" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
	</div>

	<div class="box-body">

	<div class="row">
	    <div class="col-xs-12">
		    <div class="table-responsive">

                <table class="table table-striped table-sm">
	                <tbody>
		               	<tr>
                        <th class="ion-person-stalker"> Código</th>
				        <th class="ion-person-stalker"> Descrição</th>
                        <th class="ion-ios-gear"> Ações</th>
		              	</tr>

		            	<tr>
                        <td><a href="comarcas/mostrar"> 1</a></td>
		                <td><a href="comarcas/mostrar"> Cleiton Silveira</a></td>
			            <td>

		        <div class="btn-group pull-left" role="group" aria-label="Basic example">
                    	<a href="#">
                       	<button type="button" class="btn btn-warning btn-xs"><i class="ion-edit"></i> Editar</button>
                        </a>&nbsp;
             	</div>
                	<form action="#">
                        <button type="submit" class="btn btn-danger btn-xs"> <i class="ion-trash-a"></i> Excluir </button>
                   </form>
				        </td>
		                </tr>
		            </tbody>
					</table>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                        </a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                        <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>