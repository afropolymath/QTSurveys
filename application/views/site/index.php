<div class="row">
    <h1><?= $page_title; ?></h1>
    <div class="large-12 columns">
        <? if($display): ?>
            <? if(isset($questions) && count($questions) > 0): ?>
                <?= form_open('site/index'); ?>
                <?= validation_errors('<div class="alert-box alert radius">', '</div>'); ?>
                <? foreach($questions as $question): ?>
                    <p><strong><?= $question->description; ?></strong></p>
                    <?= generate_question($question->id, $question->markup); ?>
                <? endforeach; ?>
                <input type="submit" name="submit" value="Submit" class="small button radius"/>
                <?= form_close(); ?>
            <? endif; ?>
        <? endif; ?>
    </div>
</div>
<?
function generate_question($i, $markup) {
    $this_question = "question_" . $i;
    $markup = json_decode($markup);
    switch ($markup->question_type) {
        case 'radio':
            foreach($markup->options as $option => $value) {
                echo '<label>';
                echo form_radio($this_question, $option, FALSE);
                echo " ".$value;
                echo '</label>';
            }
          break;
        case 'single_line':
            echo form_input($markup['question_name'], '');
            break;
  }
}
/*
{
question_56: 56
question_12: 45
}
*/
?>