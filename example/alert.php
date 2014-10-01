<?php 

	if (!isset($TEMPLATE)) {
		$TITLE = 'Alerts';
		$NAVIGATION = true;

		include 'template.inc.php';
	}
?>

<p>
	
</p>
<h3 class="subheading">Example</h3>
<div class="alert">
	<span>
		To indicate additional information add the <code>.alert</code> class.
	</span>
</div>
<div class="alert success">
	<span>
		To indicate success or a positive message add the <code>.alert .success
		</code> classes.
	</span>
</div>
<div class="alert warning">
	<span>
		To indicate a message containing a warning add the <code>.alert .warning
		</code> classes.
	</span>
</div>
<div class="alert error">
	<span>
		To indicate a message containing an error add the <code>.alert .error
		</code> classes.
	</span>
</div>
<h3 class="subheading">Usage</h3>
<pre>
<code>
	&lt; TODO:: add code sample.&gt;
</code>
</pre>