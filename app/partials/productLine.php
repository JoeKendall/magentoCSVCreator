"<?php echo $displayProduct['sku']; ?>",,Default,simple,,,base,,,,"2013-07-25 13:26:49",,,,,"<?php echo addslashes($displayProduct['title']); ?>",1,,,0,no_selection,,,,,,,,,"Use config","Use config","<?php echo addslashes($displayProduct['title']); ?>",,,"Block after Info Column",,<?php echo $getPrices['1']; unset($getPrices['1']);?>,0,"<?php echo addslashes($displayProduct['title']); ?>",no_selection,,,,,1,5,no_selection,,"2013-07-31 14:17:50","<?php echo createUrl($displayProduct['title']); ?>","<?php echo createUrl($displayProduct['title']); ?>.html",1,99.0000,1000.0000,0.0000,1,0,0,1,1.0000,1,0.0000,1,1,,1,0,1,0,1,0.0000,1,0,0,,,,,,,,,,<?php
		//after deleting the first key/price after printing it, count how many tiers we have.
		$numberOfTiers = count($getPrices);
		//if we have some, then we have some price tiers. The first tier goes in the same line of the CSV in magento.
		if($numberOfTiers > 0){
			foreach ($getPrices as $key => $value) {
			  //in order to extract the first key and value pair, we need to run a foreach, but break it after the first run.
			  //print the tier info, then delete this key from the pricing array.
			  echo 'all,all,'.$key.'.0000,'.$value;
			  unset($getPrices["{$key}"]);
			  break;
			}
		} else {
			//if we dont have any keys left in pricing array, then we dont have any tiers, so just blank out the tier options in the csv.
			echo ',,,';
		} ?>,,,,,,,,
		<?php
			//count the keys again to see if we have more than one tier.
			$numberOfRemainingTiers = count($getPrices);
			//if so, run the foreach using one line per tier as the magento syntax dictates.
			if($numberOfRemainingTiers > 0){
				foreach ($getPrices as $key => $value) {
					//commas need to match header field list. 
					//this produces a line, indented under the product.
					echo ',,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,all,all,'.$key.'.0000,'.$value . ',,,,,,,,';
				} //end each extra tier
			} //if if extra tiers ?>

