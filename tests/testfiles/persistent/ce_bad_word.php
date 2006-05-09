<?php
// Autogenerated PersistentObject definition

$def = new ezcPersistentObjectDefinition();
$def->table = 'ce_bad_word';
$def->class = 'ce_bad_word';

$def->properties['badword_id']               = new ezcPersistentObjectProperty();
$def->properties['badword_id']->columnName   = 'badword_id';
$def->properties['badword_id']->propertyName = 'badword_id';
$def->properties['badword_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;


$def->properties['substitution']               = new ezcPersistentObjectProperty();
$def->properties['substitution']->columnName   = 'substitution';
$def->properties['substitution']->propertyName = 'substitution';
$def->properties['substitution']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;


$def->properties['word']               = new ezcPersistentObjectProperty();
$def->properties['word']->columnName   = 'word';
$def->properties['word']->propertyName = 'word';
$def->properties['word']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>
