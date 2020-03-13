<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'messages' => 
  array (
    'Notes' => 'Grade',
    'Ajouter une note' => 'Add grade',
    'Envoyer' => 'send',
    'Voir les matières' => 'See all the subjects',
    'Voir la matière' => 'See the subject',
    'Ajouter une matière' => 'Add a subject',
    'Il n\'y a pas de matière' => 'There is no subjects',
    'Intitulé de la matière' => 'Title of the subject',
    'Supprimer cette matière' => 'Delete this subject',
    'Modifier la matière' => 'Modify the subject',
    'Matière' => 'Subject',
    'Matières' => 'Subjects',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
