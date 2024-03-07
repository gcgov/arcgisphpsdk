<?php

namespace gcgov\arcgis\models\road;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class featureProperties extends jsonDeserialize {

	public ?int    $OBJECTID               = null;
	public ?string $NLFID                  = null;
	public ?string $MP_DIR                 = null;
	public ?string $CAL_DIR                = null;
	public ?string $ASSOCIDPFX             = null;
	public ?string $EXIT_NUM               = null;
	public ?string $RAMP_NUM               = null;
	public ?int    $COUNTY                 = null;
	public ?string $MUN_SORT               = null;
	public ?string $ID_PREFIX              = null;
	public ?int    $ID_RTE_NO              = null;
	public ?string $ROUTEID                = null;
	public ?string $RDNAMELOCAL            = null;
	public ?string $RDNAMESHA              = null;
	public ?string $GEOMEDIT               = null;
	public ?string $SHAUID                 = null;
	public ?string $METADATA               = null;
	public ?string $USERID                 = null;
	public ?string $CREATED                = null;
	public ?string $LASTUPDATE             = null;
	public ?string $PREFIX_DIR             = null;
	public ?string $STREETNAME             = null;
	public ?string $STREETTYPE             = null;
	public ?string $SUFFIX_DIR             = null;
	public ?string $FRADDL_A               = null;
	public ?string $TOADDL_A               = null;
	public ?string $FRADDR_A               = null;
	public ?string $TOADDR_A               = null;
	public ?string $FRADDL_P               = null;
	public ?string $TOADDL_P               = null;
	public ?string $FRADDR_P               = null;
	public ?string $TOADDR_P               = null;
	public ?int    $ZIP_L                  = null;
	public ?int    $ZIP_R                  = null;
	public ?string $LESN                   = null;
	public ?string $RESN                   = null;
	public ?string $LCOMMUNITY             = null;
	public ?string $RCOMMUNITY             = null;
	public ?string $LGGEOMEDIT             = null;
	public ?string $MAINTENANCE            = null;
	public ?int    $UPDATED                = null;
	public ?string $MODIFIEDBY             = null;
	public ?string $CREATEDBY              = null;
	public ?string $RDNAME_LEG             = null;
	public ?string $RDNAM_ABBR             = null;
	public ?int    $PRIORITY               = null;
	public ?string $PARITY_L               = null;
	public ?string $PARITY_R               = null;
	public ?string $ONE_WAY                = null;
	public ?int    $ROADAREA               = null;
	public ?string $INCMUNI_L              = null;
	public ?string $INCMUNI_R              = null;
	public ?string $Building               = null;
	public ?string $Floor                  = null;
	public ?string $Uninc_Comm_L           = null;
	public ?string $Uninc_Comm_R           = null;
	public ?string $NbrHd_Comm_L           = null;
	public ?string $NbrHd_Comm_R           = null;
	public ?string $St_PosMod              = null;
	public ?string $ext_nguid              = null;
	public ?int    $To_AddressL            = null;
	public ?int    $To_AddressR            = null;
	public ?int    $From_AddressL          = null;
	public ?int    $From_AddressR          = null;
	public ?string $CountyL                = null;
	public ?string $CountyR                = null;
	public ?string $StateL                 = null;
	public ?string $StateR                 = null;
	public ?string $dmNotesXML             = null;
	public ?string $dmValidation           = null;
	public ?string $dmClientUploadedFileID = null;
	public ?string $GlobalID               = null;
	public ?float  $Shape__Length          = null;
	public ?string $MP_SUFFIX              = null;
	public ?string $ZoneMod                = null;

}
