<div id="contact-<?php echo $contact['Contact']['id']; ?>" class="">
	<h2><?php echo $contact['Contact']['title']; ?></h2>
	<div class="contact-body">
	<?php echo $contact['Contact']['body']; ?>
	</div>

	<?php if ($contact['Contact']['message_status']) { ?>
	<div class="contact-form">
	<?php
		echo $this->Form->create('Message', array(
			'url' => array(
				'controller' => 'contacts',
				'action' => 'view',
				$contact['Contact']['alias'],
			),
                    'class' => 'well'
		));
		echo $this->Form->input('Message.name', array('label' => __('Your name')));
		echo $this->Form->input('Message.email', array('label' => __('Your email')));
		echo $this->Form->input('Message.title', array('label' => __('Subject')));
		echo $this->Form->input('Message.body', array('label' => __('Message'), 'style' => 'width: 95%'));
		if ($contact['Contact']['message_captcha']) {
			echo $this->Recaptcha->display_form();
		}
		echo $this->Form->submit('Send', array('class' => 'btn btn-success'));
                echo $this->Form->end();
	?>
	</div>
	<?php } ?>
</div>