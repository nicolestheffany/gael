<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] = array('database');


$autoload['drivers'] = array();

$autoload['helper'] = array('url');


$autoload['config'] = array();


$autoload['language'] = array();

$autoload['model'] = array('Usuario_model', 'Meta_model','Usuario_tem_meta_model','Equipamento_model','OS_model');
