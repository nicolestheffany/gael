<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>

<div class="col-md-6">
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Gerenciar usuários</div>
                <div class="widget-icons pull-right">
                  <a id="seletor-down" href="#">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <a href="#" id="" class="">
                    <i id="seletor-up" class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id="painel" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->


                    <!--formulário de inserção-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/usuario/salvar/')?>">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Nome</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="title" name="nome" type="text">
                        </div>
                      </div>
                    <!--tipo de usuário-->

                     <div class="form-group">
                        <label class="control-label col-lg-2">Tipo de usuário</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="tipo">
                              <option value="">- Tipo -</option>
                              <option value="1">master</option>
                              <option value="2">administrador - bolsista</option>
                            </select>
                          </div>
                      </div>

                      <!-- Content -->
                         <div class="form-group">
                                <label class="control-label col-lg-2" for="title">Email</label>
                                <div class="col-lg-10">
                                  <input class="form-control" id="title" name="email" type="text">
                                </div>
                          </div>


                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">Login</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="login">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">Senha</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="senha">
                          </div>
                        </div>
                      <!-- turno -->
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">CPF</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="cpf">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">Imagem</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="imagem">
                          </div>
                        </div>
                      <!---->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Turno</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="turno">
                            <option value="">- Escolha seu turno -</option>
                            <option value="M">Manhã</option>
                            <option value="T">Tarde</option>
                            <option value="N">Noite</option>
                          </select>
                        </div>
                      </div>
                      <!--usuário bolsista-->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Bolsista</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="usuario_bolsista">
                            <option value="">- Selecione -</option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Meta</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="meta_id_meta">
                            <option value="">- Está vinculado a uma meta? -</option>

                            <?php
                            foreach ($metas as $key => $met) {
                            ?>
                                <option value="<?php echo $met->id_meta;?>"><?php echo $met->titulo;?></option>
                            <?php }?>
                          </select>
                        </div>
                      </div>      

                      <!-- Tags -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">
                            Cadastrar
                          </button>
                          <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/user/')?>">Visualizar usuários
                          </a>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>

              </div>
            </div>
          </div>

          <?php $this->load->view('footer') ?> 