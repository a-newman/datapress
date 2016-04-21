
//Adds a button to the TinyMCE toolbar with the exhibit logo
(function($) { 
	//pretty sure that this line adds your function to tinymce's plugin list
	tinymce.PluginManager.add('exhibit_button', function( editor, url ) {
	//and this line adds the actual button
	editor.addButton( 'exhibit_button', { 
		title: 'Datapress Data Visualization', 
		image: url + '/exhibit-logo.png',
		onclick: function() {
			editor.insertContent(`
				<div id="nutritionfacts">
				    <table>
				        <tbody><tr>
				            <td align="center" class="header">Nutrition Facts</td>
				        </tr>
				        <tr>
				            <td bgcolor="#000000"></td>
				        </tr>
				        <tr>
				            <td>Amount Per Serving</td>
				        </tr>
				        <tr>
				            <td>
				                <div class="label">Calories <div class="weight">230</div></div><div class="dv">Calories from Fat <div class="weight">56</div></div>
				            </td>
				        </tr>
				        <tr>
				            <td><div class="dv">% Daily Value</div></td>
				        </tr>
				        <tr>
				            <td>
				                <div class="label">Total Fat <div class="weight">6.2g</div></div>
				                <div class="dv">10%</div>
				            </td>
				        </tr>
				        <tr>
				            <td class="indent">
				                <div class="labellight">Saturated Fat <div class="weight">3.5g</div></div>
				                <div class="dv">17%</div>
				            </td>
				        </tr>
				                    <tr>
				            <td class="indent">
				                <div class="labellight"><i>Trans</i> Fat <div class="weight">0.0g</div></div>
				            </td>
				        </tr>
				        <tr>
				            <td>
				                <div class="label">Cholesterol <div class="weight">22mg</div></div>
				                <div class="dv">7%</div>
				            </td>
				        </tr>
				        <tr>
				            <td>
				                <div class="label">Sodium <div class="weight">618mg</div></div>
				                <div class="dv">26%</div>
				            </td>
				        </tr>
				        <tr>
				            <td>
				                <div class="label">Total Carbohydrates <div class="weight">32.2g</div></div>
				                <div class="dv">11%</div>
				            </td>
				        </tr>
				        <tr>
				            <td class="indent">
				                <div class="labellight">Dietary Fiber <div class="weight">5.2g</div></div>
				                <div class="dv">21%</div>
				            </td>
				        </tr>
				        <tr>
				            <td class="indent">
				                <div class="labellight">Sugars <div class="weight">3.3g</div></div>
				            </td>
				        </tr>
				        <tr>
				            <td>
				                <div class="label">Protein <div class="weight">11.4g</div>
				            </div>
				            </td>
				        </tr>
				        <tr>
				            <td bgcolor="#000000"></td>
				        </tr>

				        <tr>
				            <td>
				              <div class="label">Vitamin A 10%</div>
				              <div class="dv">Vitamin C 19%</div>
				            </td>
				        </tr>
				        <tr>
				            <td>
				              <div class="label">Calcium 22%</div>
				              <div class="dv">Iron 13%</div>
				            </td>
				        </tr>
				    

				               
				    </tbody></table>
				</div>
			`);
		}
	  }); 
	}); 

})(jQuery);
