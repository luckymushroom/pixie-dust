<form action="{site_url('sms')}" class="form-inline well" method="post">
	<legend>Price Test</legend>
<input type="hidden" id="redirect_url" required name="redirect_url" value="{$uri_string}">
	<input type="text" name="source" value="254722286084" placeholder="">
	<input type="hidden" name="destination" value="3555" placeholder="">
	<input type="text" name="message" value="price maize nairobi" placeholder="">
	<input type="text" name="network" value="Safaricom Short Code" placeholder="">
	<input type="submit" value="Price SMS" name="send sms" class="btn btn-primary">
</form>
<form action="{site_url('sms')}" class="form-inline well" method="post">
	<legend>Join Test</legend>
	<input type="hidden" id="redirect_url" required name="redirect_url" value="{$uri_string}">
	<input type="text" name="source" value="254722286084" placeholder="">
	<input type="hidden" name="destination" value="3555" placeholder="">
	<input type="text" name="message" value="join john doe nairobi" placeholder="">
	<input type="text" name="network" value="Safaricom Short Code" placeholder="">
	<input type="submit" value="Join SMS" name="send sms" class="btn btn-primary">
</form>
<form action="{site_url('sms')}" class="form-inline well" method="post">
	<legend>Sell Test</legend>
	<input type="hidden" id="redirect_url" required name="redirect_url" value="{$uri_string}">
	<input type="text" name="source" value="254722286084" placeholder="">
	<input type="hidden" name="destination" value="3555" placeholder="">
	<input type="text" name="message" value="sell maize 200kgs kes3200" placeholder="">
	<input type="text" name="network" value="Safaricom Short Code" placeholder="">
	<input type="submit" value="Sell SMS" name="send sms" class="btn btn-primary">
</form>

<form action="{site_url('sms/send_sms')}" class="form well" method="post">
	<legend>Bulk Test</legend>
	<input type="hidden" id="redirect_url" required name="redirect_url" value="{$uri_string}">
	<input type="text" name="source" value="254712502130" placeholder=""><br>
	<input type="hidden" name="destination" value="3555" placeholder="">
	<textarea name="message">Good night love. Powered by your Man.</textarea><br>
	<input type="hidden" name="network" value="Safaricom Short Code">
	<input type="submit" value="Bulk SMS" name="send sms" class="btn btn-primary">
</form>