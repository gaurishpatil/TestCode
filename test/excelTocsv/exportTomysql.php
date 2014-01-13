<?php

    mysql_connect('localhost','root','');
    mysql_select_db('matchingapp');
	$file=getcwd().DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR."Book3.csv";//echo $file;die;
    //$sql='load data local infile "'.$file.'" into table properties_d30 fields terminated by "," enclosed by """ lines terminated by "\\n""';
    $sql="LOAD DATA LOCAL 
				INFILE '$file' INTO TABLE properties_d30 FIELDS TERMINATED BY ', ' LINES TERMINATED BY '\r\n' IGNORE 1 LINES
				(reoid,account_number,tech_code,property_type,property_status,property_sub_status, valuation_status,available_status,
				days_in_status,asset_manager,sr_asset_manager,address_1,s_city,s_state,s_zip,s_county,n_investor_id,s_investor,
				pcoe_date,acquisition_date,agent,display_channel,va_property,orig_list_date,orig_list_amount,last_list_date,
				last_list_price,last_last_list_date,last_last_list_price,marketing_strategy,orig_appr_date,orig_appr_as_is,
				orig_appr_repair,latest_appr_date,latest_appr_as_is,latest_appr_repair,orig_bpo_date,orig_bpo_as_is,orig_bpo_repair,
				latest_bpo_date,latest_bpo_as_is,latest_bpo_repair,closing_company,investor,title_company,title_status,financing_type,
				last_offer_status,last_offer_date,last_offer_amount,coe,auction_vendor,latest_c4k_offered,eviction_order_date,
				eviction_complete_date,order_appraisal_date,initial_rekey_date_opened,initial_rekey_date_closed,
				request_reconciled_date_opened,upload_reconciled_complete_date,property_preservation_date_opened,
				property_preservation_date_closed,eviction_specialist,evic_pre_mkt_specialist,sr_evic_pre_mkt_specialist,
				closing_officer,sr_closing_officer,title_curative_tech,sr_title_curative_tech,auction_vendor_2,auction_sale_date,
				nsp_am,nsp_type,broker_id,agent_person_id,donation_comments)";
	$sql="LOAD DATA INFILE '$file' INTO TABLE properties_d30 FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\r\n'";
	echo $sql;die;
	
	if(mysql_query($sql))
        echo 'Successfully uploaded';
    else echo 'fail';
?>