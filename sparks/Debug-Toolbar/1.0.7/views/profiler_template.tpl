<style type="text/css">
	#codeigniter-profiler { clear: both; background: #FFF; opacity: 0.45; padding: 0 5px; font-family: Helvetica, sans-serif; font-size: 10px !important; line-height: 12px; position: fixed; width: auto; min-width: 69em; max-width: 90%; z-index: 1000; }
	#codeigniter-profiler:hover { background: #F0F0F0; opacity: 1.0; }

	#codeigniter-profiler.bottom-right { bottom:0; right: 0; -webkit-border-top-left-radius: 7px; -moz-border-radius-topleft: 7px; border-top-left-radius: 7px; -webkit-box-shadow: -1px -1px 10px #C0C0C0; -moz-box-shadow: -1px -1px 10px #C0C0C0; box-shadow: -1px -1px 10px #C0C0C0; }
	#codeigniter-profiler.bottom-left { bottom:0; top: auto; -webkit-border-top-right-radius: 7px; -moz-border-radius-topright: 7px; border-top-right-radius: 7px; -webkit-box-shadow: 1px -1px 10px #C0C0C0; -moz-box-shadow: 1px -1px 10px #C0C0C0; box-shadow: 1px -1px 10px #C0C0C0; }
	#codeigniter-profiler.top-left { top:0; left: 0; -webkit-border-bottom-right-radius: 7px; -moz-border-radius-bottomright: 7px; border-bottom-right-radius: 7px;-webkit-box-shadow: 1px 1px 10px #C0C0C0; -moz-box-shadow: 1px 1px 10px #C0C0C0; box-shadow: 1px 1px 10px #C0C0C0; }
	#codeigniter-profiler.top-right { top: 0; right: 0; -webkit-border-bottom-left-radius: 7px; -moz-border-radius-bottomleft: 7px; border-bottom-left-radius: 7px; -webkit-box-shadow: -1px 1px 10px #C0C0C0; -moz-box-shadow: -1px 1px 10px #C0C0C0; box-shadow: -1px 1px 10px #C0C0C0; }

	.ci-profiler-box { padding: 10px; margin: 0 0 10px 0; max-height: 300px; overflow: auto; color: #fff; font-family: Monaco, 'Lucida Console', 'Courier New', monospace; font-size: 11px !important; }
	.ci-profiler-box h2 { font-family: Helvetica, sans-serif; font-weight: bold; font-size: 16px !important; padding: 0; line-height: 2.0; }

	#ci-profiler-menu a:link, #ci-profiler-menu a:visited { display: inline-block; padding: 7px 0; margin: 0; color: #ccc; text-decoration: none; font-weight: lighter; cursor: pointer; text-align: center; width: 15.5%; border-bottom: 4px solid #444; }
	#ci-profiler-menu a:hover, #ci-profiler-menu a.current { background-color: #FFF; border-color: #999; }
	#ci-profiler-menu a span { display: block; font-weight: bold; font-size: 16px !important; line-height: 1.2; }

	#ci-profiler-menu-time span, #ci-profiler-benchmarks h2 { color: #B72F09; }
	#ci-profiler-menu-memory span, #ci-profiler-memory h2 { color: #953FA1; }
	#ci-profiler-menu-queries span, #ci-profiler-queries h2 { color: #3769A0; }
	#ci-profiler-menu-vars span, #ci-profiler-vars h2 { color: #D28C00; }
	#ci-profiler-menu-files span, #ci-profiler-files h2 { color: #5a8616; }
	#ci-profiler-menu-console span, #ci-profiler-console h2 { color: #5a8616; }

	#codeigniter-profiler table { width: 100%; }
	#codeigniter-profiler table.main td { padding: 7px 15px; text-align: left; vertical-align: top; color: #000; line-height: 1; background: #F0F0F0 !important; font-size: 12px !important; }
	#codeigniter-profiler table.main tr:hover td { background: #F9F9F9 !important; }
	#codeigniter-profiler table.main code { font-family: inherit; padding: 0; background: transparent; border: 0; color: #fff; }

	#codeigniter-profiler table .hilight { color: #000D70 !important; }
	#codeigniter-profiler table .faded { color: #aaa !important; }
	#codeigniter-profiler table .small { font-size: 10px; letter-spacing: 1px; font-weight: lighter; }

	#ci-profiler-menu-exit { background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIhSURBVDjLlZPrThNRFIWJicmJz6BWiYbIkYDEG0JbBiitDQgm0PuFXqSAtKXtpE2hNuoPTXwSnwtExd6w0pl2OtPlrphKLSXhx07OZM769qy19wwAGLhM1ddC184+d18QMzoq3lfsD3LZ7Y3XbE5DL6Atzuyilc5Ciyd7IHVfgNcDYTQ2tvDr5crn6uLSvX+Av2Lk36FFpSVENDe3OxDZu8apO5rROJDLo30+Nlvj5RnTlVNAKs1aCVFr7b4BPn6Cls21AWgEQlz2+Dl1h7IdA+i97A/geP65WhbmrnZZ0GIJpr6OqZqYAd5/gJpKox4Mg7pD2YoC2b0/54rJQuJZdm6Izcgma4TW1WZ0h+y8BfbyJMwBmSxkjw+VObNanp5h/adwGhaTXF4NWbLj9gEONyCmUZmd10pGgf1/vwcgOT3tUQE0DdicwIod2EmSbwsKE1P8QoDkcHPJ5YESjgBJkYQpIEZ2KEB51Y6y3ojvY+P8XEDN7uKS0w0ltA7QGCWHCxSWWpwyaCeLy0BkA7UXyyg8fIzDoWHeBaDN4tQdSvAVdU1Aok+nsNTipIEVnkywo/FHatVkBoIhnFisOBoZxcGtQd4B0GYJNZsDSiAEadUBCkstPtN3Avs2Msa+Dt9XfxoFSNYF/Bh9gP0bOqHLAm2WUF1YQskwrVFYPWkf3h1iXwbvqGfFPSGW9Eah8HSS9fuZDnS32f71m8KFY7xs/QZyu6TH2+2+FAAAAABJRU5ErkJggg==) 0% 0% no-repeat; padding-left: 20px; position: absolute; right: 5px; top: 10px; }
</style>

<script type="text/javascript">
current = null;
currentvar = null;
currentli = null;
function show (obj, el)
{
	if (obj == current) {
		off(obj);
		current = null;
	} else {
		off(current);
		on(obj);
		remove_class(current, 'current');
		current = obj;
		//ci_profiler_bar.add_class(el, 'current');
	}
}
function on (obj){ if (document.getElementById(obj) != null) document.getElementById(obj).style.display = ''; }
function off(obj){ if (document.getElementById(obj) != null) document.getElementById(obj).style.display = 'none';}
function toggle (obj){
	if (typeof obj == 'string')	obj = document.getElementById(obj);
	if (obj) obj.style.display = obj.style.display == 'none' ? '' : 'none';
}
function close_bar () { document.getElementById('codeigniter-profiler').style.display = 'none';
}
function add_class(obj, clas){ alert(obj); document.getElementById(obj).className += " "+ clas; }
function remove_class(obj, clas){
	if (obj != undefined) {
		document.getElementById(obj).className = document.getElementById(obj).className.replace(/\bclass\b/, '');
	}
}
</script>

<div id="codeigniter-profiler" class="bottom-right">

	<div id="ci-profiler-menu">

		<!-- Console -->
		{if (isset($sections['console']))}
			<a href="#" id="ci-profiler-menu-console" onclick="show('ci-profiler-console', 'ci-profiler-menu-console');return false;">
				<span>{is_array($sections['console']) ? $sections['console']['log_count'] + $sections['console']['memory_count'] : 0}</span>
				Console
			</a>
		{/if}

		<!-- Benchmarks -->
		{if (isset($sections['benchmarks'])) :?>
			<a href="#" id="ci-profiler-menu-time" onclick="show('ci-profiler-benchmarks', 'ci-profiler-menu-time'); return false;">
				<span>{$this->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end')} s</span>
				Load Time
			</a>
			<a href="#" id="ci-profiler-menu-memory" onclick="show('ci-profiler-memory', 'ci-profiler-menu-memory'); return false;">
				<span>{(! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2).' MB'}</span>
				Memory Used
			</a>
		{/if}

		<!-- Queries -->
		{if (isset($sections['queries']))}
			<a href="#" id="ci-profiler-menu-queries" onclick="show('ci-profiler-queries', 'ci-profiler-menu-queries'); return false;">
				<span>{is_array($sections['queries']) ? count($sections['queries']) : 0} Queries</span>
				Database
			</a>
		{/if}

		<!-- Vars and Config -->
		{if (isset($sections['http_headers']) || isset($sections['get']) || isset($sections['config']) || isset($sections['post']) || isset($sections['uri_string']) || isset($sections['controller_info']))}
			<a href="#" id="ci-profiler-menu-vars" onclick="show('ci-profiler-vars', 'ci-profiler-menu-vars'); return false;">
				<span>Config</span> Config  &amp;  vars
			</a>
		{/if}

		<!-- Files -->
		{if (isset($sections['files']))}
			<a href="#" id="ci-profiler-menu-files" onclick="show('ci-profiler-files', 'ci-profiler-menu-files'); return false;">
				<span>{is_array($sections['files']) ? count($sections['files']) : 0}</span> Files
			</a>
		{/if}

		<a href="#" id="ci-profiler-menu-exit" onclick="close_bar(); return false;" style="width: 2em"></a>
	</div>

{if (count($sections) > 0)}

	<!-- Console -->
	{if (isset($sections['console'])) :?>
		<div id="ci-profiler-console" class="ci-profiler-box" style="display: none">
			<h2>Console</h2>

			{if (is_array($sections['console']))}

				<table class="main">
				{foreach ($sections['console']['console'] as $log)}

					{if ($log['type'] == 'log')}
						<tr>
							<td>{$log['type']}</td>
							<td class="faded"><pre>{$log['data']}</pre></td>
							<td></td>
						</tr>
					{elseif ($log['type'] == 'memory')}
						<tr>
							<td>{$log['type']}</td>
							<td>
								<em>{$log['data_type']}</em>:
								{$log['name']}
							</td>
							<td class="hilight" style="width: 9em">{$log['data']}</td>
						</tr>
					{/if}
				{/foreach}
				</table>

			{else}

				{$sections['console']}

			{/if}
		</div>
	{/if}

	<!-- Memory -->
	{if (isset($sections['console'])) :?>
		<div id="ci-profiler-memory" class="ci-profiler-box" style="display: none">
			<h2>Memory Usage</h2>

			{if (is_array($sections['console']))}

				<table class="main">
				{foreach ($sections['console']['console'] as $log)}

					{if ($log['type'] == 'memory')}
						<tr>
							<td>{$log['type']}</td>
							<td>
								<em>{$log['data_type']}</em>:
								{$log['name']}
							</td>
							<td class="hilight" style="width: 9em">{$log['data']}</td>
						</tr>
					{/if}
				{/foreach}
				</table>

			{else}

				{$sections['console']}

			{/if}
		</div>
	{/if}

	<!-- Benchmarks -->
	{if (isset($sections['benchmarks'])) :?>
		<div id="ci-profiler-benchmarks" class="ci-profiler-box" style="display: none">
			<h2>Benchmarks</h2>

			{if (is_array($sections['benchmarks']))}

				<table class="main">
				{foreach ($sections['benchmarks'] as $key => $val)}
					<tr><td>{$key}</td><td class="hilight">{$val}</td></tr>
				{/foreach}
				</table>

			{else}

				{$sections['benchmarks']}

			{/if}
		</div>
	{/if}

	<!-- Queries -->
	{if (isset($sections['queries'])) :?>
		<div id="ci-profiler-queries" class="ci-profiler-box" style="display: none">
			<h2>Queries</h2>

			{if (is_array($sections['queries']))}
				<?php ksort($sections['queries'])}

				<table class="main" cellspacing="0">
				{foreach ($sections['queries'] as $key => $val)}
					<tr><td class="hilight">{$val[0]}</td><td>{$val[1]}</td></tr>
				{/foreach}
				</table>

			{else}

				{$sections['queries']}

			{/if}
		</div>
	{/if}

	<!-- Vars and Config -->
	{if (isset($sections['http_headers']) || isset($sections['get']) || isset($sections['config']) || isset($sections['post']) || isset($sections['uri_string']) || isset($sections['controller_info']) || isset($sections['userdata'])) :?>
		<div id="ci-profiler-vars" class="ci-profiler-box" style="display: none">

			<!-- User Data -->
			{if (isset($sections['userdata'])) :?>

					<h2>Session User Data</h2>

					{if (is_array($sections['userdata']))}

						<table class="main">
						{foreach ($sections['userdata'] as $key => $val)}
							<tr><td class="hilight">{$key}</td><td>{htmlspecialchars($val)}</td></tr>
						{/foreach}
						</table>

					{/if}
				{/if}

			<!-- The Rest -->
			{foreach (array('get', 'post', 'uri_string', 'controller_info', 'http_headers', 'config') as $section)}

				{if (isset($sections[$section])) :?>

					<h2>{lang('profiler_'. $section)}</h2>

					{if (is_array($sections[$section]))}

						<table class="main">
						{foreach ($sections[$section] as $key => $val)}
							<tr><td class="hilight">{$key}</td><td>{htmlspecialchars($val)}</td></tr>
						{/foreach}
						</table>

					{else}
						<table class="main">
							<tr><td class="hilight">{lang('profiler_'. $section)}</td><td>{$sections[$section]}</td></tr>
						</table>

					{/if}
				{/if}

			{/foreach}
		</div>
	{/if}

	<!-- Files -->
	{if (isset($sections['files'])) :?>
		<div id="ci-profiler-files" class="ci-profiler-box" style="display: none">
			<h2>Loaded Files</h2>

			<table class="main">
			{if (is_array($sections['files']))}


				{foreach ($sections['files'] as $key => $val)}
					<tr>
						<td class="hilight">
							{preg_replace("/\/.*\//", "", $val)}
							<br/><span class="faded small">{str_replace(FCPATH, '', $val)}</span>
						</td>
					</tr>
				{/foreach}


			{else}
				<tr>
					<td class="hilight">{$sections['files']}</td>
				</tr>

			{/if}
			</table>
		</div>
	{/if}


{else:}

	<p class="ci-profiler-box">{lang('profiler_no_profiles')}</p>

{/if}

</div>	<!-- /codeigniter_profiler -->