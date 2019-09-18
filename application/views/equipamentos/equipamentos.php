<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>

<div class="row">
			<div class="col-lg-12"> 
				<?php if(isset($success)){?>
					<div class="alert alert-success" role="alert">
						<?php echo $success;?>
					</div>
				<?php }elseif(isset($error)){?>
					<div class="alert alert-success" role="alert">
  						<?= $error?>
					</div>
				<?php }?>
				<a class="btn btn-primary" href="<?= base_url('index.php/equipamento/formAdd')?>">Adicionar novo equipamento</a>
				<section class="panel">
	              <header class="panel-heading">
	                Equipamentos
	              </header>

	              <table class="table table-striped table-advance table-hover">
	                <tbody>
	                  <tr>
	                    <th><i class="">Nome do equipamento</i></th>
	                    <th><i class=""></i>Numero de série</th>
	                    <th><i class=""></i>Marca</th>
						<th><i class=""></i>Modelo</th>
                        <th><i class=""></i>Situação</th>
                        <th><i class=""></i>Ações</th>
					
	                  </tr>
	                  <?php foreach ($equipamentos as $eq) {
	                  	?>
	                  <tr>
	                    <td><?php echo $eq->equipamento_name;?></td>
	                    <td><?php echo $eq->numero_serie;?></td>
						<td>
                            <?= $eq->marca;?>
						</td>
						<td>
							<?= $eq->modelo; ?>
						</td>
						<td>
                            <?php 
                                if ($eq->situacao == "0") {
                                    echo "Consertado";
                                }elseif ($eq->situacao == "1") {
                                    echo "Não consertado";
                                }else{
                                    echo "Database error";
                                }
                            ?> 
						</td>
						
                        <td width="200px">
	                      <div class="btn-group">
	                        <a title="editar" class="btn btn-success" href="<?php echo base_url('index.php/equipamento/editar/')?><?=$eq->id_equipamento;?>">
	                        	<i class="fa fa-edit"></i></a>
	                        <a title="excluir" class="btn btn-danger" href="<?php echo base_url('index.php/equipamento/deletar/')?><?=$met->id_equipamento;?>">
	                        	<i class="fa fa-trash-o"></i>
							</a>
							<a title="visualizar meta" class="btn btn-warning" href="<?php echo base_url('index.php/equipamento/view/')?><?=$met->id_equipamento;?>">
	                        	<i class="fa fa-eye"></i>
	                        </a>
	                      </div>
	                    </td>
	                  </tr>
	              	<?php } ?>
	                </tbody>
	              </table>
	            </section>
			</div>
		</div>


<?php $this->load->view('footer') ?>
