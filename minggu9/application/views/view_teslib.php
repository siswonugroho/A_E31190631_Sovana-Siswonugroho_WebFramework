<?php

$template = array(
  'table_open' => '<table border="1" cellpadding="4" cellspacing="0">',
  'table_close' => '</table>'
);

$this->table->set_template($template);
$this->table->set_heading(array('No', 'Nama', 'Prodi'));
$NUM = 1;

foreach ($mahasiswa as $row) {
  $this->table->add_row(array($NUM, $row['nama'], $row['prodi']));
  $NUM++;
}

echo $this->table->generate();