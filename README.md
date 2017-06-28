# Codeigniter-BreadCumb
Simple Breadcrumb Model for Codeigniter

<h3>Requirements</h3>
Codeigniter 3x (Now CI Version 3.1.4), <br>
Bootstrap 3<br>

<h3>Usage</h3>
Turn on autoload URL helper, example:<br>
In config/autload.php<br>
$autoload['helper'] = array('url');<br><br>

Simple load Breadcrumb model anywhere inside your controller:<br>
$this->load->model('Breadcrumb');<br><br>

After model is loaded, you can add items like this:<br>
$this->Breadcrumb->add(array('label' => 'Home', 'url' => base_url()));<br>
$this->Breadcrumb->add(array('label' => 'Webshop', 'url' => base_url('webshop')));<br><br>

Now you can ready to show breadcrumb in your view, just implement this line, where you want to use:<br>
<?php $this->load->view('_partials/breadcrumb'); ?><br><br>

If you want to be the last element active link, you can change this line:<br>
$this->Breadcrumb->get(TRUE)<br>
to<br>
$this->Breadcrumb->get(FALSE)<br>
