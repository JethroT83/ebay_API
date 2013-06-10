<?php

		Class eBay_get_orders
			{
				
				Public $Documentation = 'eBay_request($xmlRequest, $header, $URL) ; $xmlRequest = $this->xmlRequest($To, $From) ; $hearder = $this->header; $url = $this->url)';
					
				Public $URL = 'https://api.ebay.com/ws/api.dll';
					
				Public $header =	  '\'X-EBAY-API-COMPATIBILITY-LEVEL:791\',
									  \'X-EBAY-API-DEV-NAME:[get this info from the eBay Sandbox]\',                                
									  \'X-EBAY-API-APP-NAME:[get this info from the eBay Sandbox]\',
									  \'X-EBAY-API-CERT-NAME:[get this info from the eBay Sandbox]\',
									  \'X-EBAY-API-SITEID:0\',
									  \'X-EBAY-API-CALL-NAME:GetOrders\',
									  \'X-EBAY-API-REQUEST-ENCODING: XML\',
									  \'Content-Type: text/xml;charset=utf-8\'';
				
				
				function xmlRequest($From,$To)
					{
					$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
					$xmlRequest .= "<GetOrdersRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">";
					$xmlRequest .= "<RequesterCredentials>";
					$xmlRequest .= "<eBayAuthToken>AgAAAA**AQAAAA**aAAAAA**zBlZUA**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wNlYaoAZaKoQSdj6x9nY+seQ**dnUBAA**AAMAAA**C2m8TlLkb1ZzDSm7DR4sazBMt+koPGz0haEKbOa6IMCq6wkIqOOaLEqj8I0Ebqk3CE3QgNZFngjcTn3iVEHTbGBQqCS1oJqVP1z5pVPlB2ZPy4iu8OSsreq/XODe0s2017D3f6/4acQNMc8ejr45mXWfQzFhmRAoYYb23CcfBh6Lt8J5nk5VY1DHryfDQhxpYivQZLf9+zDEcCRk6/mhvBJch8wrqlaebd2uLVBRuGC8dueDF9dmNsEQ55wd3YP/TNcPEmKuxB4yCySJjFU7Hf8Zlx8iGsJpofj9L1PnE6nns/mFXHKHl+ZU7bAtKZ+M9fPMI/0+us90Mu7SNvqMUNLezv7LFyW7rryQnrNeU7NH1SBQIaTxLRbv/8ZwXsJA1qk5cZfTjawlHuV/5hzUHcqtFkOEIDg4SrT+/eA0gSYwa7m4ZIhvfWS2aEikKpsbNcYJTeO5bQxNjsM7LtW62YFQQpwTlJVX8wlO/gvLguiclugGWOW6wpegyHBI0f9GDv6MKiNwT8FxOCdQSIfzph2mEzv4oQv0v2q27DRP2YVTWy41ps/EVeFD525WHC8Pjogzy4zmpqeajuUDGCCjRC/9yPCfJ3EltayqVoz09kHJ+W2HWjcRCy3P/URmi5KZKrNO5tnqXv8q1yYh10Rqpi7wTXG4kuR6QvkeH9O47ltDdtR09q4rW4qFcJOipN2fdfi9gZG0TF26wb3GHRMELXRbTw46vaWXel51vM6qoApew2gUP0o+x9Jcq/obCOnI</eBayAuthToken>";
					$xmlRequest .= "</RequesterCredentials>";
					$xmlRequest .= "<OrderRole>Seller</OrderRole>";
					$xmlRequest .= "<OrderStatus>Completed</OrderStatus>";
					$xmlRequest .= "<ModTimeFrom>" . $From . "</ModTimeFrom>";
					$xmlRequest .= "<ModTimeTo>" . $To . "</ModTimeTo>";
					$xmlRequest .= "<IncludeFinalValueFee>True</IncludeFinalValueFee>";
					$xmlRequest .= "<DetailLevel>ReturnAll</DetailLevel>";
					$xmlRequest .= "<MessageID>string</MessageID>";
					$xmlRequest .= "<Version>791</Version>";
					$xmlRequest .= "<WarningLevel>High</WarningLevel>";
					$xmlRequest .= "</GetOrdersRequest>?";
					
					return $xmlRequest;
					}
			}
					
					
		Class eBay_find_product
			{
				Public $Documentation = 'eBay_request($xmlRequest, $header, $URL) ; $xmlRequest = $this->xmlRequest($To, $From) ; $hearder = $this->header; $url = $this->url)';
					
				Public $URL = 'http://open.api.ebay.com/shopping?';
					
				Public $header =	array('X-EBAY-API-APP-ID:[get this info from the eBay Sandbox]',
												'X-EBAY-API-VERSION:819',
												'X-EBAY-API-SITE-ID:0',
												'X-EBAY-API-CALL-NAME:FindProducts',
												'X-EBAY-API-REQUEST-ENCODING:XML',
												'Content-Type: text/xml;charset=utf-8');
					
				function xmlRequest($keyword)
					{
					$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
					$xmlRequest .= "<FindProductsRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">";
					$xmlRequest .= "<AvailableItemsOnly>false</AvailableItemsOnly>";
					$xmlRequest .= "<QueryKeywords>".$keyword."</QueryKeywords>";
					$xmlRequest .= "<ProductSort>Popularity</ProductSort>";
					$xmlRequest .= "<SortOrder>Descending</SortOrder>";
					$xmlRequest .= "<MaxEntries>10</MaxEntries>";
					$xmlRequest .= "<HideDuplicateItems>false</HideDuplicateItems>";
					$xmlRequest .= "</FindProductsRequest>";
					
					return $xmlRequest;
					}			
			}
			
		Class eBay_GetSingleItem
			{
				Public $Documentation = 'eBay_request($xmlRequest, $header, $URL) ; $xmlRequest = $this->xmlRequest($To, $From) ; $hearder = $this->header; $url = $this->url)';
					
				Public $URL = 'http://open.api.ebay.com/shopping?';
					
				Public $header =	array('X-EBAY-API-APP-ID:[get this info from the eBay Sandbox]',
											'X-EBAY-API-VERSION:819',
											'X-EBAY-API-SITE-ID:0',
											'X-EBAY-API-CALL-NAME:FindProducts',
											'X-EBAY-API-REQUEST-ENCODING:XML',
											'Content-Type: text/xml;charset=utf-8');
					
				function xmlRequest($keyword)
					{
					$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
					$xmlRequest .= "<FindProductsRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">";
					$xmlRequest .= "<AvailableItemsOnly>false</AvailableItemsOnly>";
					$xmlRequest .= "<QueryKeywords>".$keyword."</QueryKeywords>";
					$xmlRequest .= "<ProductSort>Popularity</ProductSort>";
					$xmlRequest .= "<SortOrder>Descending</SortOrder>";
					$xmlRequest .= "<MaxEntries>10</MaxEntries>";
					$xmlRequest .= "<HideDuplicateItems>false</HideDuplicateItems>";
					$xmlRequest .= "</FindProductsRequest>";
					
					return $xmlRequest;
					}		
			
			}
			
		Class eBay_Find_Competed_Items
			{
				Public $Documentation = 'eBay_request($xmlRequest, $header, $URL) ; $xmlRequest = $this->xmlRequest($Para_array) $Para_array  Search = Document[\'Search\'] Aspect array = Document[\'AspectFilter\'] Item Filter = Document[\'ItemFilter\'], Output Selector = Document[\'OutputSelector\'], Sort order = Document[\'SortOrder\'], Organize Results = Document[\'Page\']; $hearder = $this->header; $url = $this->url)';
				
				Public function Document()
					{
						$Document['Search'] = '<br>'.'Serach is done either via category or keyword.  There must be at least a category or keyword for the functioin to work.  Both can be used at the same time.';
						$Document['Search'] .= '<br>'.'Search[\'keyword\'] - if it is set then there will be a search via keyword';
						$Document['Search'] .=  '<br>'.'Search[\'category\'] - if it is set then there will be a search via category';
						
						$Document['AspectFilter'] = '<br>'.'Name --- of a standard item characteristic associated with a given domain. For example, "Optical Zoom" or "Megapixels" are aspects for the Digital Cameras domain. The current aspect names associated with a specific domain can be found in the aspect histogram. Aspect histograms can be retrieved for a given keyword query or category. The aspect histogram contains information about aspects from the domain that is most relevant to your search (or category).';
						$Document['AspectFilter'] .= '<br>'.'Value--- name for a given aspect. For example, "Point & Shoot" is a value name for the "Product Type" aspect in the "Digital Cameras" domain.alue name for a given aspect. For example, "Point & Shoot" is a value name for the "Product Type" aspect in the "Digital Cameras" domain.';
						
						
						$Document['ItemFilter'] = '<br>'.'AuthorizedSellerOnly - true, false ';
						$Document['ItemFilter'] .= '<br>'.'Available To - Country Code';
						$Document['ItemFilter'] .= '<br>'.'BestOfferOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'CharityOnly - true, false ';
						$Document['ItemFilter'] .= '<br>'.'Condition -  NEW = 1000 NEW OTHER - 1500  NEW With DEFECTS - 1750  MAn REF- 2000  SELLER REF- 2500 USED-3000  VERY GOOD - 4000 GOOD - 5000   ACCEPTABLE - 6000   FOR PARTS - 7000';
						$Document['ItemFilter'] .= '<br>'.'Currency - USD';
						$Document['ItemFilter'] .= '<br>'.'EndTimeFrom - datetime';
						$Document['ItemFilter'] .= '<br>'.'EndTimeTo - datetime';
						$Document['ItemFilter'] .= '<br>'.'ExcludeAutoPay - true, false';
						$Document['ItemFilter'] .= '<br>'.'ExcludeCategory - See Category ID\'s';
						$Document['ItemFilter'] .= '<br>'.'ExcludeSeller - Seller ID';
						$Document['ItemFilter'] .= '<br>'.'ExpeditedShippingType - Expedited, OneDayShipping';
						$Document['ItemFilter'] .= '<br>'.'FeaturedOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'FeedbackScoreMax - integer';
						$Document['ItemFilter'] .= '<br>'.'FeedbackScoreMin - integer';
						$Document['ItemFilter'] .= '<br>'.'FreeShippingOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'GetItFastOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'HideDuplicateItems - true, false';
						$Document['ItemFilter'] .= '<br>'.'ListedIn - Country ID';
						$Document['ItemFilter'] .= '<br>'.'ListingType - Auction, AuctionWithBIN, Classified, FixedPrice, StoreInventory, All';
						$Document['ItemFilter'] .= '<br>'.'LocalPickupOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'LocalSearchOnly - true, false  (if true, max distance is needed';
						$Document['ItemFilter'] .= '<br>'.'LocatedIn -  Country ID ';
						$Document['ItemFilter'] .= '<br>'.'LotsOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'MaxBids - integer';
						$Document['ItemFilter'] .= '<br>'.'MaxDistance - integer (distance in miles)';
						$Document['ItemFilter'] .= '<br>'.'MaxHandlingTime - integer (in days)';
						$Document['ItemFilter'] .= '<br>'.'MaxPrice - double';
						$Document['ItemFilter'] .= '<br>'.'MaxQuantity - integer';
						$Document['ItemFilter'] .= '<br>'.'MinBids - integer';
						$Document['ItemFilter'] .= '<br>'.'MinPrice  - double';
						$Document['ItemFilter'] .= '<br>'.'MinQuantity - integer';
						$Document['ItemFilter'] .= '<br>'.'ModTimeFrom - datetime';
						$Document['ItemFilter'] .= '<br>'.'OutletSellerOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'PaymentMethod - Paypal, PaisaPay (India), PaisaPayEMI (India)';
						$Document['ItemFilter'] .= '<br>'.'ReturnsAcceptedOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'Seller  - seller name';
						$Document['ItemFilter'] .= '<br>'.'SellerBusinessType - eBay domain';
						$Document['ItemFilter'] .= '<br>'.'SoldItemsOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'StartTimeFrom - datetime';
						$Document['ItemFilter'] .= '<br>'.'StartTimeTo - datetime';
						$Document['ItemFilter'] .= '<br>'.'TopRatedSellerOnly - true, false';
					
						$Document['OutputSelector'] = '<br>'.'AspectHistogram - Include an AspectHistogram container with information about aspects from the domain that is most relevant to your search. ';
						$Document['OutputSelector'] .= '<br>'.'CategoryHistogram - Include a CategoryHistogram container with information about categories that match your search.';
						$Document['OutputSelector'] .= '<br>'.'ConditionHistogram - Include a ConditionHistogram container with the number of items found per condition (e.g., how many items are new). This value has no effect when Condition is specified as an item filter. Supported for all eBay sites except US eBay Motors, India (IN), Malaysia (MY) and Philippines (PH).';
						$Document['OutputSelector'] .= '<br>'.'GalleryInfo - Include the GalleryInfoContainer, which contains URLs for three thumbnail images of the item in different sizes: large, medium, and small.';
						$Document['OutputSelector'] .= '<br>'.'PictureURLLarge - Include a URL to a picture of the item that is 400x400 pixels in size.';
						$Document['OutputSelector'] .= '<br>'.'PictureURLSuperSize - Include a URL to a picture of the item that is 800x800 pixels in size.';
						$Document['OutputSelector'] .= '<br>'.'SellerInfo - Include information about the seller in the response.';
						$Document['OutputSelector'] .= '<br>'.'StoreInfo - Include information about the seller\'s eBay store in the response.';
						$Document['OutputSelector'] .= '<br>'.'UnitPriceInfo - Include the unitPrice container with unit type and quantity information used for per-unit pricing (on eBay EU sites only).';

						$Document['SortOrder'] = '<br>'.'sorter[\'BestMatch\'] - Sorts items by Best Match, which is based on community buying activity and other relevance-based factors. ';
						$Document['SortOrder'] .= '<br>'.'sorter[\'BidCountFewest\'] - Sorts items by the number of bids they have received, with items that have received the fewest bids first. ';
						$Document['SortOrder'] .= '<br>'.'sorter[\'BidCountMost\'] - Sorts items by the number of bids they have received, with items that have received the most bids first. ';
						$Document['SortOrder'] .= '<br>'.'sorter[\'CountryAscending\'] - located in the country most closely associated with the site appear first';
						$Document['SortOrder'] .= '<br>'.'sorter[\'CountryDescending\'] - items in countries not specifically related to the site appear first';
						$Document['SortOrder'] .= '<br>'.'sorter[\'CurrentPriceHighest\'] - Sorts items by their current price, with the highest price first.';
						$Document['SortOrder'] .= '<br>'.'sorter[\'DistanceNearest\'] - Sorts items by distance from the buyer in ascending order. The request must also include a buyerPostalCode.';
						$Document['SortOrder'] .= '<br>'.'sorter[\'EndTimeSoonest\'] - Sorts items by end time, with items ending soonest listed first.';
						$Document['SortOrder'] .= '<br>'.'sorter[\'PricePlusShippingHighest\'] - combined cost of the item price plus the shipping cost, with highest combined price';
						$Document['SortOrder'] .= '<br>'.'sorter[\'PricePlusShippingLowest\'] - combined cost of the item price plus the shipping cost, with lowest combined price';
						$Document['SortOrder'] .= '<br>'.'sorter[\'StartTimeNewest\'] - Sorts items by the start time, the most recently listed (newest) items appear first.';
										
						$Document['Page'] = 	'<br>'.'$paginationarray[\'pagenumber\'] = page number in the list';
						$Document['Page'] .=	'<br>'.'$paginationarray[\'entriesperpage\'] = entries per page'; 
				
						Return $Document;
					}
				
				Public $URL = 'http://svcs.ebay.com/services/search/FindingService/v1?';
					
				Public $header =	array('X-EBAY-SOA-SERVICE-NAME:FindingService',
											'X-EBAY-SOA-OPERATION-NAME:findCompletedItems',
											'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
											'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
											'X-EBAY-SOA-SECURITY-APPNAME:[get this info from the eBay Sandbox]',
											'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML',
											'Content-Type: text/xml;charset=utf-8');
					
				
				
				
				
				
				function xmlRequest($search, $aspect_array, $item_selector_array, $paginationarray, $outputselector, $sort)
				//function xmlRequest($para_array)
					{
									/*$category_id = $para_array['category_id'];
									$item_selector_array = $para_array['item_selector_array'];
									$paginationarray = $para_array['paginationarray'];
									$outputselector = $para_array['outputselector'];
									$sort = $para_array['sorter'];*/
					
					
					$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
					$xmlRequest .= "<findCompletedItemsRequest xmlns=\"http://www.ebay.com/marketplace/search/v1/services\">";
					$xmlRequest .= "<descriptionSearch>true</descriptionSearch>";
					If(isset($search['keyword'])==1)
						{
						//$keyword = $search['keyword'];
						$xmlRequest .= "<keywords>".$search['keyword']."</keywords>";
						}
					
					If(isset($search['category'])==1)
						{
						
						$xmlRequest .= "<categoryId>".$search['category']."</categoryId>";
						}
					
					If(isset($search['productId'])==1)
						{
						$type = $search['type'];
						$xmlRequest .= "<productId type='".$type."'>".$search['productId']."</productId>";
						}
					
					
					If($aspect_array!='')
						{
						foreach ($item_selector_array as $key => $value)
							{
								$xmlRequest .= "<aspectFilter>";
								$xmlRequest .= "<aspectName>".$key."</aspectName>";
								$xmlRequest .= "<aspectValueName>".$value."</aspectValueName>";
								$xmlRequest .= "</aspectFilter>";
						
							}
						}
					
					If($item_selector_array!='')
						{
						foreach ($item_selector_array as $key => $value)
							{
								$xmlRequest .= "<itemFilter>";
								$xmlRequest .= "<name>".$key."</name>";
								$xmlRequest .= "<value>".$value."</value>";
								$xmlRequest .= "</itemFilter>";
						
							}
						}
	
					$xmlRequest .= "<outputSelector>".$outputselector."</outputSelector>";
					$xmlRequest .= "<sortOrder>".$sort."</sortOrder>";
					
					$xmlRequest .= "<paginationInput>";
					$xmlRequest .= "<pageNumber>".$paginationarray['pagenumber']."</pageNumber>";
					$xmlRequest .= "<entriesPerPage>".$paginationarray['entriesperpage']."</entriesPerPage>";
					$xmlRequest .= "</paginationInput>";
					
					$xmlRequest .= "</findCompletedItemsRequest>";
					
					return $xmlRequest;
					}		
			
				
				function parse($resp)
					{	
						if(isset($resp->searchResult->item->{0}->title)==0){return 'no results';}
						

						$item_num = 0;
						while(isset($resp->searchResult->item->{$item_num}->title)==1)
						{
							//$result[$item_num]['item_num']			= $item_num;
							$result[$item_num]['itemId']				= $resp->searchResult->item->{$item_num}->itemId;
							$result[$item_num]['Title']					= $resp->searchResult->item->{$item_num}->title;
							$result[$item_num]['timestamp']				= $resp->timestamp;
							$result[$item_num]['Category_ID']			= $resp->searchResult->item->{$item_num}->primaryCategory->categoryId;
							$result[$item_num]['Category_Name']			= $resp->searchResult->item->{$item_num}->primaryCategory->categoryName;
							$result[$item_num]['currentPrice']			= $resp->searchResult->item->{$item_num}->sellingStatus->currentPrice;
							$result[$item_num]['bidCount']				= $resp->searchResult->item->{$item_num}->sellingStatus->bidCount;
							$result[$item_num]['sellingState']			= $resp->searchResult->item->{$item_num}->sellingStatus->sellingState;
							$result[$item_num]['returnsAccepted']		= $resp->searchResult->item->{$item_num}->returnsAccepted;
							$result[$item_num]['conditionId']			= $resp->searchResult->item->{$item_num}->condition->conditionId;
							$result[$item_num]['conditionDisplayName']	= $resp->searchResult->item->{$item_num}->condition->conditionDisplayName;
							$result[$item_num]['topRatedListing']		= $resp->searchResult->item->{$item_num}->topRatedListing;
						
							$item_num++;
						}
						return $result;
					}
					
			
					
				function display($result)
					{
						
						if(isset($result->timestamp)==0){echo "function requires Class eBay_request  resp = obj->request(eBay_Find_Competed_Items, pararray) AND Class eBay_Find_Competed_Items  result = obj->parse(resp);;  Class eBay_Find_Competed_Items  disp = obj->display(result) "; }
						$item_num =0;
						
						foreach ($result as $item_num => $item_array)
						{
							$print[$item_num] = '';
							foreach ($item_array as $key => $value)
								{
									If ($key =='item_num')
										{
										$itemdisplay = ('
											<table><td><tr><h2>ITEM NUMBER '.$item_num.'</h2></tr>
											<tr><h3>'.$item_array['Title'].'</h3></tr></table>');
										}else{
											$print[$item_num] .= ('<tr>
											<td>'.$key.'</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>'.$value.'</td>
											</tr>');
													
												
											}//If ($key =='item_num')
											$disp[$item_num] = $itemdisplay.'<table>'.$print[$item_num].'</table>';
								}//foreach ($result as $key => $value)
						$item_num++;
						}//foreach ($result as $item_num => $item_array)		
						
						$resp='';
						foreach ($disp as $item_num => $r)
								{	
									$resp.= $disp[$item_num];
								}//foreach ($disp as $item_num => $r)
						return ('<html>'.$resp.'</html>');
					}//function ebay_display_findcompleteitems($keyword)
				
			}	
			
			
			
		Class eBay_find_Items_advanced
			{
				Public $Documentation = 'eBay_request($xmlRequest, $header, $URL) ; $xmlRequest = $this->xmlRequest($Para_array) $Para_array  Search = Document[\'Search\'] Aspect array = Document[\'AspectFilter\'] Item Filter = Document[\'ItemFilter\'], Output Selector = Document[\'OutputSelector\'], Sort order = Document[\'SortOrder\'], Organize Results = Document[\'Page\']; $hearder = $this->header; $url = $this->url)';
				
				Public function Document()
					{
						$Document['Search'] = '<br>'.'Serach is done either via category or keyword.  There must be at least a category or keyword for the functioin to work.  Both can be used at the same time.';
						$Document['Search'] .= '<br>'.'Search[\'keyword\'] - if it is set then there will be a search via keyword';
						$Document['Search'] .=  '<br>'.'Search[\'category\'] - if it is set then there will be a search via category';
						
						$Document['AspectFilter'] = '<br>'.'Name --- of a standard item characteristic associated with a given domain. For example, "Optical Zoom" or "Megapixels" are aspects for the Digital Cameras domain. The current aspect names associated with a specific domain can be found in the aspect histogram. Aspect histograms can be retrieved for a given keyword query or category. The aspect histogram contains information about aspects from the domain that is most relevant to your search (or category).';
						$Document['AspectFilter'] .= '<br>'.'Value--- name for a given aspect. For example, "Point & Shoot" is a value name for the "Product Type" aspect in the "Digital Cameras" domain.alue name for a given aspect. For example, "Point & Shoot" is a value name for the "Product Type" aspect in the "Digital Cameras" domain.';
						
						
						$Document['ItemFilter'] = '<br>'.'AuthorizedSellerOnly - true, false ';
						$Document['ItemFilter'] .= '<br>'.'Available To - Country Code';
						$Document['ItemFilter'] .= '<br>'.'BestOfferOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'CharityOnly - true, false ';
						$Document['ItemFilter'] .= '<br>'.'Condition -  NEW = 1000 NEW OTHER - 1500  NEW With DEFECTS - 1750  MAn REF- 2000  SELLER REF- 2500 USED-3000  VERY GOOD - 4000 GOOD - 5000   ACCEPTABLE - 6000   FOR PARTS - 7000';
						$Document['ItemFilter'] .= '<br>'.'Currency - USD';
						$Document['ItemFilter'] .= '<br>'.'EndTimeFrom - datetime';
						$Document['ItemFilter'] .= '<br>'.'EndTimeTo - datetime';
						$Document['ItemFilter'] .= '<br>'.'ExcludeAutoPay - true, false';
						$Document['ItemFilter'] .= '<br>'.'ExcludeCategory - See Category ID\'s';
						$Document['ItemFilter'] .= '<br>'.'ExcludeSeller - Seller ID';
						$Document['ItemFilter'] .= '<br>'.'ExpeditedShippingType - Expedited, OneDayShipping';
						$Document['ItemFilter'] .= '<br>'.'FeaturedOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'FeedbackScoreMax - integer';
						$Document['ItemFilter'] .= '<br>'.'FeedbackScoreMin - integer';
						$Document['ItemFilter'] .= '<br>'.'FreeShippingOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'GetItFastOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'HideDuplicateItems - true, false';
						$Document['ItemFilter'] .= '<br>'.'ListedIn - Country ID';
						$Document['ItemFilter'] .= '<br>'.'ListingType - Auction, AuctionWithBIN, Classified, FixedPrice, StoreInventory, All';
						$Document['ItemFilter'] .= '<br>'.'LocalPickupOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'LocalSearchOnly - true, false  (if true, max distance is needed';
						$Document['ItemFilter'] .= '<br>'.'LocatedIn -  Country ID ';
						$Document['ItemFilter'] .= '<br>'.'LotsOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'MaxBids - integer';
						$Document['ItemFilter'] .= '<br>'.'MaxDistance - integer (distance in miles)';
						$Document['ItemFilter'] .= '<br>'.'MaxHandlingTime - integer (in days)';
						$Document['ItemFilter'] .= '<br>'.'MaxPrice - double';
						$Document['ItemFilter'] .= '<br>'.'MaxQuantity - integer';
						$Document['ItemFilter'] .= '<br>'.'MinBids - integer';
						$Document['ItemFilter'] .= '<br>'.'MinPrice  - double';
						$Document['ItemFilter'] .= '<br>'.'MinQuantity - integer';
						$Document['ItemFilter'] .= '<br>'.'ModTimeFrom - datetime';
						$Document['ItemFilter'] .= '<br>'.'OutletSellerOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'PaymentMethod - Paypal, PaisaPay (India), PaisaPayEMI (India)';
						$Document['ItemFilter'] .= '<br>'.'ReturnsAcceptedOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'Seller  - seller name';
						$Document['ItemFilter'] .= '<br>'.'SellerBusinessType - eBay domain';
						$Document['ItemFilter'] .= '<br>'.'SoldItemsOnly - true, false';
						$Document['ItemFilter'] .= '<br>'.'StartTimeFrom - datetime';
						$Document['ItemFilter'] .= '<br>'.'StartTimeTo - datetime';
						$Document['ItemFilter'] .= '<br>'.'TopRatedSellerOnly - true, false';
					
						$Document['OutputSelector'] = '<br>'.'AspectHistogram - Include an AspectHistogram container with information about aspects from the domain that is most relevant to your search. ';
						$Document['OutputSelector'] .= '<br>'.'CategoryHistogram - Include a CategoryHistogram container with information about categories that match your search.';
						$Document['OutputSelector'] .= '<br>'.'ConditionHistogram - Include a ConditionHistogram container with the number of items found per condition (e.g., how many items are new). This value has no effect when Condition is specified as an item filter. Supported for all eBay sites except US eBay Motors, India (IN), Malaysia (MY) and Philippines (PH).';
						$Document['OutputSelector'] .= '<br>'.'GalleryInfo - Include the GalleryInfoContainer, which contains URLs for three thumbnail images of the item in different sizes: large, medium, and small.';
						$Document['OutputSelector'] .= '<br>'.'PictureURLLarge - Include a URL to a picture of the item that is 400x400 pixels in size.';
						$Document['OutputSelector'] .= '<br>'.'PictureURLSuperSize - Include a URL to a picture of the item that is 800x800 pixels in size.';
						$Document['OutputSelector'] .= '<br>'.'SellerInfo - Include information about the seller in the response.';
						$Document['OutputSelector'] .= '<br>'.'StoreInfo - Include information about the seller\'s eBay store in the response.';
						$Document['OutputSelector'] .= '<br>'.'UnitPriceInfo - Include the unitPrice container with unit type and quantity information used for per-unit pricing (on eBay EU sites only).';

						$Document['SortOrder'] = '<br>'.'sorter[\'BestMatch\'] - Sorts items by Best Match, which is based on community buying activity and other relevance-based factors. ';
						$Document['SortOrder'] .= '<br>'.'sorter[\'BidCountFewest\'] - Sorts items by the number of bids they have received, with items that have received the fewest bids first. ';
						$Document['SortOrder'] .= '<br>'.'sorter[\'BidCountMost\'] - Sorts items by the number of bids they have received, with items that have received the most bids first. ';
						$Document['SortOrder'] .= '<br>'.'sorter[\'CountryAscending\'] - located in the country most closely associated with the site appear first';
						$Document['SortOrder'] .= '<br>'.'sorter[\'CountryDescending\'] - items in countries not specifically related to the site appear first';
						$Document['SortOrder'] .= '<br>'.'sorter[\'CurrentPriceHighest\'] - Sorts items by their current price, with the highest price first.';
						$Document['SortOrder'] .= '<br>'.'sorter[\'DistanceNearest\'] - Sorts items by distance from the buyer in ascending order. The request must also include a buyerPostalCode.';
						$Document['SortOrder'] .= '<br>'.'sorter[\'EndTimeSoonest\'] - Sorts items by end time, with items ending soonest listed first.';
						$Document['SortOrder'] .= '<br>'.'sorter[\'PricePlusShippingHighest\'] - combined cost of the item price plus the shipping cost, with highest combined price';
						$Document['SortOrder'] .= '<br>'.'sorter[\'PricePlusShippingLowest\'] - combined cost of the item price plus the shipping cost, with lowest combined price';
						$Document['SortOrder'] .= '<br>'.'sorter[\'StartTimeNewest\'] - Sorts items by the start time, the most recently listed (newest) items appear first.';
										
						$Document['Page'] = 	'<br>'.'$paginationarray[\'pagenumber\'] = page number in the list';
						$Document['Page'] .=	'<br>'.'$paginationarray[\'entriesperpage\'] = entries per page'; 
				
						Return $Document;
					}
				
				Public $URL = 'http://svcs.ebay.com/services/search/FindingService/v1?';
					
				Public $header =	array('X-EBAY-SOA-SERVICE-NAME:FindingService',
											'X-EBAY-SOA-OPERATION-NAME:findCompletedItems',
											'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
											'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
											'X-EBAY-SOA-SECURITY-APPNAME:[get this info from the eBay Sandbox]',
											'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML',
											'Content-Type: text/xml;charset=utf-8');
					
				
				
				
				
				
				function xmlRequest($search, $aspect_array, $item_selector_array, $paginationarray, $outputselector, $sort)
				//function xmlRequest($para_array)
					{
									/*$category_id = $para_array['category_id'];
									$item_selector_array = $para_array['item_selector_array'];
									$paginationarray = $para_array['paginationarray'];
									$outputselector = $para_array['outputselector'];
									$sort = $para_array['sorter'];*/
					
					
					$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
					$xmlRequest .= "<findCompletedItemsRequest xmlns=\"http://www.ebay.com/marketplace/search/v1/services\">";
					
					$xmlRequest .= "<descriptionSearch>true</descriptionSearch>";
					If(isset($search['keyword'])==1)
						{
						//$keyword = $search['keyword'];
						$xmlRequest .= "<keywords>".$search['keyword']."</keywords>";
						}
					
					If(isset($search['category'])==1)
						{
						$xmlRequest .= "<categoryId>".$search['category']."</categoryId>";
						}
					
					If($aspect_array!='')
						{
						foreach ($item_selector_array as $key => $value)
							{
								$xmlRequest .= "<aspectFilter>";
								$xmlRequest .= "<aspectName>".$key."</aspectName>";
								$xmlRequest .= "<aspectValueName>".$value."</aspectValueName>";
								$xmlRequest .= "</aspectFilter>";
						
							}
						}
					
					If($item_selector_array!='')
						{
						foreach ($item_selector_array as $key => $value)
							{
								$xmlRequest .= "<itemFilter>";
								$xmlRequest .= "<name>".$key."</name>";
								$xmlRequest .= "<value>".$value."</value>";
								$xmlRequest .= "</itemFilter>";
						
							}
						}
	
					$xmlRequest .= "<outputSelector>".$outputselector."</outputSelector>";
					$xmlRequest .= "<sortOrder>".$sort."</sortOrder>";
					
					$xmlRequest .= "<paginationInput>";
					$xmlRequest .= "<pageNumber>".$paginationarray['pagenumber']."</pageNumber>";
					$xmlRequest .= "<entriesPerPage>".$paginationarray['entriesperpage']."</entriesPerPage>";
					$xmlRequest .= "</paginationInput>";
					
					$xmlRequest .= "</findCompletedItemsRequest>";
					
					return $xmlRequest;
					}
			
			}
			
			
		Class eBay_Best_Match_Details
			{
			
				Public $URL = 'https://svcs.ebay.com/services/search/BestMatchItemDetailsService/v1?';
					
				Public $header =	array('X-EBAY-SOA-SERVICE-NAME:BestMatchItemDetailsService',
											'X-EBAY-SOA-OPERATION-NAME:findBestMatchItemDetailsByKeywords',
											'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
											'X-EBAY-SOA-SECURITY-TOKEN:[get this info from the eBay Sandbox]',
											'X-EBAY-SOA-SERVICE-VERSION:1.7.0',
											'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
											/*'Content-Type: text/xml;charset=utf-8'*/);
				
				
				
				
				
				
				function xmlRequest($keyword, $item_selector_array, $siteResults, $outputselector)
					{

						$xmlRequest = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
						$xmlRequest .= "<findBestMatchItemDetailsByKeywordsRequest xmlns=\"http://www.ebay.com/marketplace/search/v1/services\">";

						$xmlRequest .= "<siteResultsPerPage>10</siteResultsPerPage>";
						$xmlRequest .= "<keywords>Viewsonic VG2236WM</keywords>";

						If($item_selector_array!='')
							{
							foreach ($item_selector_array as $key => $value)
										{
									
										$xmlRequest .= "<itemFilter>";
										$xmlRequest .= "<name>".$key."</name>";
										$xmlRequest .= "<value>".$value."</value>";
										$xmlRequest .= "</itemFilter>";
									
										}
																
							}
						$xmlRequest .= "<outputSelector>FirstPageSummary</outputSelector>";
						
						$xmlRequest .= "</findBestMatchItemDetailsByKeywordsRequest>";
					}

				
			}
		
			Class eBay_request
				{
					
					
					Public function exe_request($xmlRequest, $header, $URL)
							{
	
								$session  = curl_init($URL);                       // create a curl session

								
								curl_setopt($session, CURLOPT_POST, true);              // POST request type
								curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); // set the body of the POST
								curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    // return values as a string - not to std out
								$headers = $header;
								
								curl_setopt($session, CURLOPT_HTTPHEADER, $headers);    //set headers using the above array of headers
								$responseXML = curl_exec($session); 	// send the request
								curl_close($session);
								
								
								return $responseXML;  // returns a string

							} // function	
					
					
					
					
					function request($type, $para_array)
						{
							If ($type=='Doc')
								{
								echo "ebay_find_product---  Does and ebay search based on a keyword query"."<br>"."$xmlRequest = $obj->xmlRequest($para1)----- array(keyword = '');$header = $obj->header;$URL = $obj->URL;"."<br>"."<br>";
								echo "eBay_get_orders---  Rerieves orders based on time parameters ($From, $to)"."<br>". "$xmlRequest = $obj->xmlRequest($para1,$para2)----- array(from= '', to= '');$header = $obj->header;$URL = $obj->URL;"."<br>"."<br>";
								}
							
							If ($type=='eBay_GetSingleItem')
								{
									$obj = new eBay_GetSingleItem;
									
									$keyword = $para_array['keyword'];
									
									$xmlRequest = $obj->xmlRequest($keyword);
									$header = $obj->header;
									$URL = $obj->URL;
									
									$output = $this->exe_request($xmlRequest, $header, $URL);
									$resp = simplexml_load_string($output);
									return $resp;
								}
							
							
							
							If ($type=='ebay_find_product')
								{
									$obj = new eBay_find_product;
									
									$keyword = $para_array['keyword'];
									
									$xmlRequest = $obj->xmlRequest($keyword);
									$header = $obj->header;
									$URL = $obj->URL;

									$output = $this->exe_request($xmlRequest, $header, $URL);
									$resp = simplexml_load_string($output);
									return $resp;

								}
								
							If ($type =='eBay_get_orders')
								{
									$obj = new eBay_get_orders;
									
									$from = $para_array['from'];
									$to = $para_array['to'];
									
									$xmlRequest = $obj->xmlRequest($from, $to);
									$header = $obj->header;
									$URL = $obj->URL;
									
									$output = $this->exe_request($xmlRequest, $header, $URL);
									$resp = simplexml_load_string($output);
									return $resp;
								}
								
								
							If ($type =='eBay_Find_Competed_Items')
								{
									$obj = new eBay_Find_Competed_Items;
									
									$category_id = $para_array['search'];
									$aspect_array = $para_array['aspect_array'];
									$item_selector_array = $para_array['item_selector_array'];
									$paginationarray = $para_array['paginationarray'];
									$outputselector = $para_array['outputselector'];
									$sort = $para_array['sorter'];
									
									$xmlRequest = $obj->xmlRequest($category_id, $aspect_array, $item_selector_array, $paginationarray, $outputselector, $sort);
									$header = $obj->header;
									$URL = $obj->URL;
									
									$output = $this->exe_request($xmlRequest, $header, $URL);
									$resp = simplexml_load_string($output);
									return $resp;
								}
								
								
							If ($type =='eBay_find_Items_Advanced')
								{
									$obj = new eBay_Find_Competed_Items;
									
									$category_id = $para_array['search'];
									$aspect_array = $para_array['aspect_array'];
									$item_selector_array = $para_array['item_selector_array'];
									$paginationarray = $para_array['paginationarray'];
									$outputselector = $para_array['outputselector'];
									$sort = $para_array['sorter'];
									
									$xmlRequest = $obj->xmlRequest($category_id, $aspect_array, $item_selector_array, $paginationarray, $outputselector, $sort);
									$header = $obj->header;
									$URL = $obj->URL;
									
									$output = $this->exe_request($xmlRequest, $header, $URL);
									$resp = simplexml_load_string($output);
									return $resp;
								}	
							
							If ($type =='eBay_Best_Match_Details')
								{
									$obj = new eBay_Best_Match_Details;
									
									$keyword = $para_array['keyword'];
									$item_selector_array = $para_array['item_selector_array'];
									$siteResults = $para_array['siteResults'];
									$outputselector = $para_array['outputselector'];
									
									foreach ($item_selector_array as $key =>$value)
									{
									echo "key---".$key."----value----".$value."<br>";
									}
									
									
									$xmlRequest = $obj->xmlRequest($keyword, $item_selector_array, $siteResults, $outputselector);
									$header = $obj->header;
									$URL = $obj->URL;
									
									$output = $this->exe_request($xmlRequest, $header, $URL);
									$resp = simplexml_load_string($output);
									return $resp;
								}	
						}


					function ebay_parse_findcompleteitems($keyword, $para_array)
						{	
							if($para_array==''){$para_array = array('search'=>array('keyword'=>$keyword), 'aspect_array'=>'', 'item_selector_array'=>array('Condition'=>'1000', 'Currency'=>'USD', 'FeedbackScoreMin'=>'10', 'SoldItemsOnly'=>'true', 'EndTimeFrom'=>'2013-04-01T05:59:43.768Z', 'EndTimeFrom'=>'2013-05-05T05:59:43.768Z'), 'paginationarray'=>array('pagenumber'=>'1','entriesperpage'=>'5'), 'outputselector'=>'AspectHistogram', 'sorter'=>'PricePlusShippingLowest');}
							$resp = $this->request('eBay_Find_Competed_Items', $para_array);

							$item_num = 0;
							while(isset($resp->searchResult->item->{$item_num}->title)==1)
							{
								$result[$item_num]['item_num']				= $item_num;
								$result[$item_num]['Title']					= $resp->searchResult->item->{$item_num}->title;
								$result[$item_num]['timestamp']				= $resp->timestamp;
								$result[$item_num]['Category_ID']			= $resp->searchResult->item->{$item_num}->primaryCategory->categoryId;
								$result[$item_num]['Category_Name']			= $resp->searchResult->item->{$item_num}->primaryCategory->categoryName;
								$result[$item_num]['currentPrice']			= $resp->searchResult->item->{$item_num}->sellingStatus->currentPrice;
								$result[$item_num]['bidCount']				= $resp->searchResult->item->{$item_num}->sellingStatus->bidCount;
								$result[$item_num]['sellingState']			= $resp->searchResult->item->{$item_num}->sellingStatus->sellingState;
								$result[$item_num]['returnsAccepted']		= $resp->searchResult->item->{$item_num}->returnsAccepted;
								$result[$item_num]['conditionId']			= $resp->searchResult->item->{$item_num}->condition->conditionId;
								$result[$item_num]['conditionDisplayName']	= $resp->searchResult->item->{$item_num}->condition->conditionDisplayName;
								$result[$item_num]['topRatedListing']		= $resp->searchResult->item->{$item_num}->topRatedListing;

								$print[$item_num] = '';
								foreach ($result as $key => $value)
										{
										If ($key =='item_num')
											{
												$itemdisplay = ('
															<table><td><tr><h2>ITEM NUMBER '.$item_num.'</h2></tr>
															<tr><h3>'.$result['Title'].'</h3></tr></table>');
											}else{
												$print[$item_num] .= ('<tr>
													<td>'.$key.'</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td>'.$value.'</td>
													</tr>');
													
												
											}//If ($key =='item_num')
											$disp[$item_num] = $itemdisplay.'<table>'.$print[$item_num].'</table>';
										}//foreach ($result as $key => $value)
								$item_num++;			
							}//while(isset($resp->searchResult->item->{$item_num}->title)==1)
							$resp='';
							foreach ($disp as $item_num => $r)
									{	
										$resp.= $disp[$item_num];
									}//foreach ($disp as $item_num => $r)
							return ('<html>'.$resp.'</html>');
					}//function ebay_display_findcompleteitems($keyword)
				
				}	
		
			
?>