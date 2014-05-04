<?php
    $elementSetMetadata = array(
        'name'        => 'Quality Control Metadata',
        'description' => "CAVPP custom QC metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(
		// CAVPP Quality Control Notes
		array(
            'label' => 'CAVPP Quality Control Notes',
            'name'  => 'CAVPP Quality Control Notes',
            /* 'description' => 'CAVPP Quality Control Notes.', */
        ),

		// Partner Quality Control Notes
		array(
            'label' => 'Partner Quality Control Notes',
            'name'  => 'Partner Quality Control Notes',
            /* 'description' => 'Partner Quality Control Notes.', */
        ),		
		
		//Vendor Quality Control Notes - Pres. master
		array(
            'label' => 'Vendor Quality Control Notes - Preservation Master',
            'name'  => 'Vendor Quality Control Notes - Preservation Master',
            /* 'description' => 'Vendor Quality Control.', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Vendor Quality Control Notes - Copy/Mezzanine master
		array(
            'label' => 'Vendor Quality Control Notes - Copy/Mezzanine Master',
            'name'  => 'Vendor Quality Control Notes - Copy/Mezzanine Master',
            /* 'description' => 'Vendor Quality Control.', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Vendor Quality Control Notes - Access copy
		array(
            'label' => 'Vendor Quality Control Notes - Access Copy',
            'name'  => 'Vendor Quality Control Notes - Access Copy',
            /* 'description' => 'Vendor Quality Control.', */
            'data_type'   => 'Tiny Text',
        ),
		
	);
