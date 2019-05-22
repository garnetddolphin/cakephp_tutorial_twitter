<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Bootstrap Test</a>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">
<?php
    echo $this->Form->create();
    echo $this->Form->input('textbox');
    echo $this->Form->input('select box', [
        'type' => 'select',
        'options' => [1, 2, 3]
    ]);
    echo $this->Form->input('radio', [
        'label' => 'radio',
        'type' => 'radio',
        'options' => [1, 2, 3]
    ]);
    echo $this->Form->input('checkbox', [
        'multiple' => 'checkbox',
        'options' => [1, 2, 3]
    ]);
    echo $this->Form->button('Submit', [
        'class' => 'btn btn-primary'
    ]);
    echo $this->form->end();
?>
</div>