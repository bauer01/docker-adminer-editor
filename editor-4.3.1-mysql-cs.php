<?php
/** Adminer Editor - Compact database editor
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.1
*/error_reporting(6135);$Hb=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Hb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Be=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Be)$$V=$Be;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé�vt2���!�r0���t~�U�'3M��W�B�'c�P�:6T\rc�A�zr_�WK�\r-�VNFS%~�c���&�\\^�r����u�ŎÞ�ً4'7k����Q��h�'g\rFB\ryT7SS�P�1=ǤcI��:�d��m>�S8L�J��t.M���	ϋ`'C����889�� �Q����2�#8А����6m����j��h�<�����9/��:�J�)ʂ�\0d>!\0Z��v�n��o(���k�7��s��>��!�R\"*nS�\0@P\"��(�#[���@g�o���zn�9k�8�n���1�I*��=�n������0�c(�;�à��!���*c��>Ύ�E7D�LJ��1�J=���1L��?�s=#`�3\$4���uȱ��zG�C YAt�?;�Q�k&��YP�u��ǯ}UaHV%G;�s��<A\0\\��P�\\��&ª�V��\n�SU�t���r���2�	l^�Z6�ej����A�d�[�sն�JP����ҝ��8�=����6#˂74*���#e���!�7{�6��<o�C�9v[�M��-`��k�>�l�ڴ��I��H�3�x����w0t6��%MR%��jh�B�<�\0�AQ<P<:��u/�;\\>��-��ʈ��QH\nv�L+v�æ�<�\r��v����\\*����Ӵݢg��n˩��TЩ2P�\r��ߋ\"+z�8���:#�����2��J[�i����;z�����r�3#�ى�:�n�\r㽃e�pdݍ� �2c��4�k���\rG��E6_���=�SZUǷ㌞O���?��þ27�c�А�hnƋ��u3�E>\$J[�q[\r�I�6.�J�\"EPr�G̊GA��W���\r���6��k���`.-��B2>#��h���X���u\r��=�Z� b�Ł(�╃!JZȔu�yO��Z�M��6�lM[0�䖀��!Im�y�+p�#ag���vW�:qp\"4����he��0�d�Aq-\"������\"2���@�)o�,,�����Rb`@�B@������Q\n�芷�Z���=(r~�l�~��h�sAll�\n7�!1!��#�\0K��A�LH(�!�ʘagH\0�T\ni�/�\$���4Ga�I�!�.�Ř5��M\r�2���	�;�,��LIJ���d?�����%Ո:�N@b.��2�5���t:FAw�B�E�,�-\$��'�:өu�?�tK;ḱ��и��\0ouMD)k_Ph���5MC}7���2�w.Q�B�8)���8(DI�=��y`�ed\0s,`ɕj�H��\"(b���\\��nl�\"ق^�쀭eE�\n���X!SqX��\r���7A���0���y7pP���a�A�4��(y�Jwm�2����.�󉆬fp���;Ƅ5�J�c�q�Qz\\\0[H�� 3�f'b��F���Y�\nA�9_�I��(�f�ӝq�V������4�����RI�Y��&J��F�}�{FT�h9[7�h\0��T�^��j��q�j���Ք���c�WI�@`_�sVD��[�\"{1��3��	������<�l�l.���[����#į��b��u��/�\0�3�va嫑Dp>�2�I�DW՚�kK�A��hH�]��F���W�!]�ʝ�lt�ɕR̭4L[���YC cTj<c;s�q�p�� �5�t�J�m6�%J�-\\��eB=i�-�*%�����TV�[&M8�*\r�b�Y\rih�	��P�9T�-VɰZ���۳�49β���p-�`�����G�ٛ'�����M�:�ř')0�Yu�c�:!�x#צ�-l*�T�\nYl������*D��X� V\\���ڮ�]y��\n�2r,Ɇ��,�d��~ų��s�-�+ֻu�]�\\B����Iw��!�Os�ԯl�YC�Ђ��:�@ƜEU�._)�9u�z��vψS���1��_(S��q齡r�yu�+�Z*�6�u�y�<���z\\|�ZK;�e�ז�oY���;���l��x��-7���4rkYY?��GWt���[Kښ��zo�<����	t��􆶾��ɀg��j��_!��o���\$ I��I�.&�5�P\\��]�����\nC�.��_��;��s�i�S/g�:�P�ɳauNͨ|�a��ᙺ������6�ӎٞ3�|����{�ce�X��<�e�p>N�}��~��O���ҙBl��j�/��K��Hdch-˾������/�������ȶ�hԞ�0��Ќ�Ћ����H��8�");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n0��S��a9��S`�����&�(��n0���QI��f��\$�At^ s�G��tf6e��y��()L�S��P'�����R'�fq]\"�s>	)�`�H2�Eq9��?�*)��t'��ϧ�\n	\r�s<�Pi2IN��*(=2�gX��.3�N�Y4�B<�L���i�̥2��z=�0H���'�ꌚ�u�tt:������e�]`pX9��o5�g��I��,2O4��х�M�S�(�a��#������|�G�b���x�^Z[��G��uTv�(ҝm@V�(���bN<��`��X�1�+��9J8�2\r�K�9�h�	���`�����I8䛱S���t�2�+,��I�� ��p�9m@�:����x�)���C��x�3��4P7��-�4�r\"p3Fh��-5��U4͉�\\6��<D\$�l�9�R4t7��dD3�p�Γk�:)\\;�����\r@�t�\$4O�<��!pd���QJ\r�H�}:&����Ȅ�5YWJ�����`�N��bKNS���a�����d>2W�ŅbDj:9[21c���ȝ�:X�@�q�#��4�L�'J��+DHe�3�.�O��K˰���pV��t2�wp;Ɠ���\r?�OzDq.���-�\"�Z�c�X3!/>P�F�s�ɲ��0�(��ʣ�����T63sVQo��SΑ�b�߅^r\$�@C� r2)��� �V�)+nܷz������l��{�K#��9�{�ۯl���m�Q��h�*ɗP�:�c�]�7���=��L���i;�2������<\\�J���b�n����n�_iӴ�J\n������C:���`N4�̖�'Aw:4}�ۣ�W\080��L3��J;�i�)\\�=/N�u=ZV6&cea��p��.[�v�tPZ��X`֔��+z�'��9�.\$\$���@\n\r�]_�ٮ��h�kk�Ms>`̖�j�%�\\9ж��('�jA�>BCd\"K\$	CA�����.².`��.E�洖��yy\0�D2�8t	�6��8�FL������B*��,�|\nx\\@��@��3r ����WKQb,%���DBf�ȳD|͌�E0/�2>�Y!Ć'��`�f�mH�<B�B0\r*\0Gx��n�Y4����,�L������%S�,�v�0���X�Q�1�HId`�!.�V��H/��×�H��0�U��0��`�LI�8��k��2�4JYN�&�8x�J�k:AK㝡nW�!�����I�;'��\":2��4�~�J�8�ᒑ��G��\"M�=\rZ'�n�i9F����r��R�t�3\0��Ҳ�2�y��B^��b'��z�ɲ(�#�d9It�&W�jNa��C(� j�Ė?h���j����քZ\$0��ү�J	A_�\n�!T�O�4�<{a��?��o ���-����?Hl�\"�2�y�=�먞�R��ф����͊�P&�G���4��%()�\r5M����LT�\0���xBI�=ltv�2Jhv���~/:��p��:8\"д5���0�#�*�7����\n�q�>�G\$���):	��\"�#�KfI�!�v�+?{����Qg��{�R�Q��C��}�#��iIb�g���X�����}��`�}3�%@��{_k�}0��ȗ�p�!�a��<7�e���F�?����X�D���, ��Ck���U��L>�1���܇����p0�#�\$���V)pY�s5A�:��U�(9�5��,F+�&�*{�-����:����:7��:ʙyP������X�+���\n�I;��\\s��P��1�����r��NJ�AT'-���k?��Y@�����f��b񎒔R�J�i�m�B~�K\rK��t�4��;O�Kc�9%H�5��d�3��e8j�P��[s�9,�Ę�bzK����W&e�d8���)����uP����>�#	P&��P	�pba��ͨy���\$3}��{���hy�(�dW�������_�:�'A؂�P��I\"�!�[`�n8�i/@���P	�f�Ў冩�V	����s�C�8���Ny��h��tEnAj.-��6��qwJ�?�ù�A�hu	��s�A��O7��j��\n	]�0�^�	�\nY��\$�Ζ_�\r�\$�u*��ޡ�Ex/d�pdR�d��:�I�oD����sQ��f��I�����8�,��K��IsM@aq\n/���M�R����C�-a�a���/�H�!�4F��I���pŔMϫ��_؇H�9{�.�\$W���#{��Ү���:�S���(�'l�MY�:lʞ�mD\$�\0���\0���'�~� Z@�����V��L\"�jn�5��Nl�����K�fj&�M��O��dbӰN����O\$i)�N�(��!P)�0+�6HpN���F���Ж��?L\n���-h�0��,.e��\"��6m#�	��o&����g�Z�@P�k�&̺_�%\\\\'���\0]\$(�5�N fq�|�p� `��<��R��� ��͸����I\0����L�|�\$���(��ŬTkQ6k�B@0H���P�\r���#�u��+�ܲpT��Zѱ�/�\r y�Pp%\0^8��\r������4��\0��1���Qn*+B8q�ࠎ�F�\0д�ܱ��\n���.���H��%��3��&P�F�ф�X���`O ����9R�B��\r �10��콇O �X��^+�����i��ArD�4��`�-�.i`4�'�,\$�V�,_c~;Bn<�1\$,]%�l��D=��\$�).1b%g��z���}��G2�1]8uP���D]	/z ��g�+'�7D\0]����a�pV��L��0�+`Xp� ��d�-h�+h(������\n���f���s2,�2�@z �.I``�*��1l?��R���W.�.c%\$���s+4����6�\$Cr�F)0��\r�1-�`�ӌ �j�L�\r�8���l�0��*.L�Kp�\r��\r�/r�L�a8�2K�1n�b��4�L����,�ˬ���\nij��r�i#ǩ8�1�bx�2�\$N�\re� �\r\"8�'������\r�-�P��Y�0��Yb�S\0���\\jK+q6V�h�1�U�z`p��R�E�C��X����%�F	5�F4f-�tP�ID6\0NF�N�4�_�0�\riL@�n��P�^������%'�LԨ�G�������\\�F�����&�4��I*5�O��O��P�)8�)�*L�;�4E�]�\$���\0L3�E �Ek����It%e�\nb�(��SM�}��7s��ۏ�)gi��F��&�-XH� ����B�M5~jrPj̾-|֤�9���p��5��;o��5�����c\nd��u�	���\rL�h�'\n�''�< O\0�e,. ��\"t\r�k^�{_�_gT��`\0�	Mk?�2�\r:Db%�]U�[��1��cu�[��[9]��/ EV>k@�a\r_\"�b6]� E�D�Q^)ș�@Ps�ITr vT\0�VR�W@ �iR�2/�b�,Xr��	j�^��0����k���C�l��fl'8E����o�W���I��mp룶�/&�+����X��k.��\\�4�0d�r\"��kb\nH\$Т��KC��o�Oo��G%\r����ύl������ �]�P7\"*hPP�\rc�_�X[`������7�:`��U�ߨ�I��w�d�;��	���x� t���8d\0�@�jw�v� ��{�� b�	�p����cy��\n��, u<	��\"uyE:��Z`<LF����2��cw�S�d�%uw��u�߀#pqNN��N�\n�#@�E�#\"@|d%kwc\"*�x���w��\0uX.��l&Xe��M��B'��@6Ch�»`S��w��G���ӈC[V��1��\r��b\"�\n\0�\n`�J����+�a1�\"lW}z�]zjdO�>!���G\0[\\��F|��� �^\0ZJ`��b�`#�5��`W����E;���(��!`��`\"�~Eߒg��hVGr���_�u�j�Q�*d'2g/�-\n�h��^�da)וE:H�h���vEv�s�B����9w�\0��M�����W�NL���� �3��-�=#@%�D!��XL*��V����;��1��ǘ���M�k��X�؁������&���r<�[%U�eq�WW�#\$�蝌lIV�A�W_G�V���F\"&f�(�o�dV1���*wr0�F\"����H���v�Tq�hw*���@����s�.�0g8�1_�zf���A)���+<��u\"�F_lO#����n{�XYwv,���� H��Ǔc�{n7�<8�YfB���\0�Fe�\r��:�r��\$gy����6=p�;4�9\0�b%a2Bɐ��\n��	(�\r�@GF��@���%��߲Š1��Гqb�s+�Zg�%@t%�ࠚ3���\r�D(�L��v.���\\\rR ^��	�A2�\r־;yv����~�U��*��@��<���q�Wa��S��W��=�y�E�<V�@<��1��3��\$���\$�P�D��w2U����;�]����%!\n����D)���I/h~����<�+���0���s�34�-����G��4����T\n��u3��<T�ck���W��W��GU��Ǎfme�\\�D!*v�x3�i�2�w2��1��|�\$&ԉ+��bG\$v!r�*-�4�qu�\r�yL�0��tXƅ������I�b�d��S��<�a����G�~G����m �g�x-T����Y�ᙖ��!(wH�\n�4a�g)`��%�@r�Y%���(q�X���!c՝\$Dy�]mj�bpR�4R��R��u�X��p�/6 h�e��+�n�@�cH�ɹ�����{Ŕ���.\\bmV�pP�`bQr�P��\0`\$W�W�Rq2x%bY�1����������>���1���u&b\nV�o��N�j\n����EĆ�C3��G\0����ep�����<~B^ A�%/9��;�v\\�[�H�l�^U����Ӟh���.\\Y�}+	�Yt���qƉ6�\ns��\0�����c:�3�*}������7z\$�d\\��\"�� W��Y��+��I���e���\0��S�9���Dt[r�ך�C֩b�~馳D�w/�l���L`�~ �U��V_��\0\r�w�)�b�Ʀ8�G��%���W�U��A�v(�HFg��X�c��n9�2����n12l��\r�?\"t�\0XP�s���Ymf���F?m��x5�}H�_��Xc�y��κC��.�\$�`�k�d5.rx>Ǣ7���s�n3���<��g����O(\\@�W�:P�σ{�_F���hg�LӠ>�<�6�~'�K�0�?@��EA�_� �8H.LG<���d �Y�o���������kF<��p��(�j\$9����?��V P?)��ؤD�u��Lb�����j����}	�\0�Kp��7��ZsԀ��D�)�\r�:��JQ֓}��\$��b��A�u)���\"X���M�%pQP�Q��\$@���\\�\0�V�7���TM�X��*��#)G\\��K���M�0�=��J�&�`�\"x�_��b�B`�C?/��Ū�BUu�83�NR���_�]N�T�ܿD����wI�\n�2���D:Y�	��q1��`B����F!]W5�,:�1�(�0�tQ�F�	��p�7�'!\"@��8�0�`�7�\rhC��\nXӡ�\rA�C�	m	Q���&l&�|c�L�d�\"#�\"����PK����56Hʄbʗ&��+�#f�V�/S��h(Td�u���<=�xd�8�:�m!�6�8�,JP~RP�D�Z��u���O�`�0X���A��wأ0eh^C�\$� ���8A��P��(�#+K�N4�%\n�B��>���2�%���{0�Ƌ��0ϟ�/��z���	P����ʚ @�g�D�z���D�Ԋ�Y॓4���,%l3W��U�����Lr[�����9H��gT`@7�\r��N�� ������>�������i\0pz���H����r;`IV�]E���GYz\r��En��/{�Ď���	dQsbTj\$g>�~=�ˊ�J⃷��KY���Z1��K�RҔԻ��6A�\r�{�C�t� 5��=n��c��N)��L�=/��<�<;b�U��V�៚i�1��~��`H���E����_���R<\$b9��ռ\n>{h@�<�7���B��[�\r�<4IbM),�@�%082遢���sCO#�2A��r���|o�+Ia��u���+&P3�pRM\\l�R/��I�JR���^j�0���2~JCFdjV!�K2;��\$v�6�;m��i�d\"F		�U���BtP�z���");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress(compile_file('','minify_js'));}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($gc){$vc=substr($gc,-1);return
str_replace($vc.$vc,$vc,substr($gc,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
number($V){return
preg_replace('~[^0-9]+~','',$V);}function
remove_slashes($qd,$Hb=false){if(get_magic_quotes_gpc()){while(list($x,$V)=each($qd)){foreach($V
as$w=>$U){unset($qd[$x][$w]);if(is_array($U)){$qd[$x][stripslashes($w)]=$U;$qd[]=&$qd[$x][stripslashes($w)];}else$qd[$x][stripslashes($w)]=($Hb?$U:stripslashes($U));}}}}function
bracket_escape($gc,$ua=false){static$se=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($gc,($ua?array_flip($se):$se));}function
charset($f){return(version_compare($f->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$W,$Fa,$sc="",$Uc="",$Ia="",$tc=""){$K="<input type='checkbox' name='$D' value='".h($W)."'".($Fa?" checked":"").($tc?" aria-labelledby='$tc'":"").($Uc?' onclick="'.h($Uc).'"':'').">";return($sc!=""||$Ia?"<label".($Ia?" class='$Ia'":"").">$K".h($sc)."</label>":$K);}function
optionlist($Yc,$Jd=null,$Ge=false){$K="";foreach($Yc
as$w=>$U){$Zc=array($w=>$U);if(is_array($U)){$K.='<optgroup label="'.h($w).'">';$Zc=$U;}foreach($Zc
as$x=>$V)$K.='<option'.($Ge||is_string($x)?' value="'.h($x).'"':'').(($Ge||is_string($x)?(string)$x:$V)===$Jd?' selected':'').'>'.h($V);if(is_array($U))$K.='</optgroup>';}return$K;}function
html_select($D,$Yc,$W="",$Tc=true,$tc=""){if($Tc)return"<select name='".h($D)."'".(is_string($Tc)?' onchange="'.h($Tc).'"':"").($tc?" aria-labelledby='$tc'":"").">".optionlist($Yc,$W)."</select>";$K="";foreach($Yc
as$x=>$V)$K.="<label><input type='radio' name='".h($D)."' value='".h($x)."'".($x==$W?" checked":"").">".h($V)."</label>";return$K;}function
select_input($c,$Yc,$W="",$id=""){return($Yc?"<select$c><option value=''>$id".optionlist($Yc,$W,true)."</select>":"<input$c size='10' value='".h($W)."' placeholder='$id'>");}function
confirm(){return" onclick=\"return confirm('".'Opravdu?'."');\"";}function
print_fieldset($r,$xc,$Ke=false,$Uc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Uc)."return !toggle('fieldset-$r');\">$xc</a></legend><div id='fieldset-$r'".($Ke?"":" class='hidden'").">\n";}function
bold($Aa,$Ia=""){return($Aa?" class='active $Ia'":($Ia?" class='$Ia'":""));}function
odd($K=' class="odd"'){static$q=0;if(!$K)$q=-1;return($q++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($x,$V=null){static$Ib=true;if($Ib)echo"{";if($x!=""){echo($Ib?"":",")."\n\t\"".addcslashes($x,"\r\n\t\"\\/").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\/").'"':'null');$Ib=false;}else{echo"\n}\n";$Ib=true;}}function
ini_bool($kc){$V=ini_get($kc);return(preg_match('~^(on|true|yes)$~i',$V)||(int)$V);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
set_password($X,$O,$T,$G){$_SESSION["pwds"][$X][$O][$T]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}function
q($Q){global$f;return$f->quote($Q);}function
get_vals($I,$d=0){global$f;$K=array();$J=$f->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$d];}return$K;}function
get_key_vals($I,$g=null,$le=0){global$f;if(!is_object($g))$g=$f;$K=array();$g->timeout=$le;$J=$g->query($I);$g->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$g=null,$k="<p class='error'>"){global$f;$Sa=(is_object($g)?$g:$f);$K=array();$J=$Sa->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($g)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$K;}function
unique_array($L,$t){foreach($t
as$s){if(preg_match("~PRIMARY|UNIQUE~",$s["type"])){$K=array();foreach($s["columns"]as$x){if(!isset($L[$x]))continue
2;$K[$x]=$L[$x];}return$K;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$A))return$A[1].idf_escape(idf_unescape($A[2])).$A[3];return
idf_escape($x);}function
where($Y,$m=array()){global$f,$v;$K=array();foreach((array)$Y["where"]as$x=>$V){$x=bracket_escape($x,1);$d=escape_key($x);$K[]=$d.($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$V)?" LIKE ".q(addcslashes($V,"%_\\")):($v=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$V)):" = ".unconvert_field($m[$x],q($V))));if($v=="sql"&&preg_match('~char|text~',$m[$x]["type"])&&preg_match("~[^ -@]~",$V))$K[]="$d = ".q($V)." COLLATE ".charset($f)."_bin";}foreach((array)$Y["null"]as$x)$K[]=escape_key($x)." IS NULL";return
implode(" AND ",$K);}function
where_check($V,$m=array()){parse_str($V,$Ea);remove_slashes(array(&$Ea));return
where($Ea,$m);}function
where_link($q,$d,$W,$Wc="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($d)."&where%5B$q%5D%5Bop%5D=".urlencode(($W!==null?$Wc:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($W);}function
convert_fields($e,$m,$N=array()){$K="";foreach($e
as$x=>$V){if($N&&!in_array(idf_escape($x),$N))continue;$oa=convert_field($m[$x]);if($oa)$K.=", $oa AS ".idf_escape($x);}return$K;}function
cookie($D,$W,$_c=2592000){global$aa;return
header("Set-Cookie: $D=".urlencode($W).($_c?"; expires=".gmdate("D, d M Y H:i:s",time()+$_c)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($aa?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$V){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($X,$O,$T,$h=null){global$jb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($jb))."|username|".($h!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($X!="server"||$O!=""?urlencode($X)."=".urlencode($O)."&":"")."username=".urlencode($T).($h!=""?"&db=".urlencode($h):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$B=null){if($B!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($_!==null?$_:$_SERVER["REQUEST_URI"]))][]=$B;}if($_!==null){if($_=="")$_=".";header("Location: $_");exit;}}function
query_redirect($I,$_,$B,$yd=true,$zb=true,$Bb=false,$ke=""){global$f,$k,$b;if($zb){$Ud=microtime(true);$Bb=!$f->query($I);$ke=format_time($Ud);}$Td="";if($I)$Td=$b->messageQuery($I,$ke);if($Bb){$k=error().$Td;return
false;}if($yd)redirect($_,$B.$Td);return
true;}function
queries($I){global$f;static$td=array();static$Ud;if(!$Ud)$Ud=microtime(true);if($I===null)return
array(implode("\n",$td),format_time($Ud));$td[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I).";";return$f->query($I);}function
apply_queries($I,$fe,$wb='table'){foreach($fe
as$R){if(!queries("$I ".$wb($R)))return
false;}return
true;}function
queries_redirect($_,$B,$yd){list($td,$ke)=queries(null);return
query_redirect($td,$_,$B,$yd,false,!$yd,$ke);}function
format_time($Ud){return
sprintf('%.3f s',max(0,microtime(true)-$Ud));}function
remove_from_uri($ed=""){return
substr(preg_replace("~(?<=[?&])($ed".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Ya){return" ".($F==$Ya?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($x,$bb=false){$Eb=$_FILES[$x];if(!$Eb)return
null;foreach($Eb
as$x=>$V)$Eb[$x]=(array)$V;$K='';foreach($Eb["error"]as$x=>$k){if($k)return$k;$D=$Eb["name"][$x];$qe=$Eb["tmp_name"][$x];$Ta=file_get_contents($bb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$qe":$qe);if($bb){$Ud=substr($Ta,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Ud,$zd))$Ta=iconv("utf-16","utf-8",$Ta);elseif($Ud=="\xEF\xBB\xBF")$Ta=substr($Ta,3);$K.=$Ta."\n\n";}else$K.=$Ta;}return$K;}function
upload_error($k){$Fc=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Nepodařilo se nahrát soubor.'.($Fc?" ".sprintf('Maximální povolená velikost souboru je %sB.',$Fc):""):'Soubor neexistuje.');}function
repeat_pattern($H,$yc){return
str_repeat("$H{0,65535}",$yc/65535)."$H{0,".($yc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($Q,$yc=80,$ae=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$yc).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$yc).")($)?)",$Q,$A);return
h($A[1]).$ae.(isset($A[2])?"":"<i>...</i>");}function
format_number($V){return
strtr(number_format($V,0,".",' '),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($qd,$ic=array()){while(list($x,$V)=each($qd)){if(!in_array($x,$ic)){if(is_array($V)){foreach($V
as$w=>$U)$qd[$x."[$w]"]=$U;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($V).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Cb=false){$K=table_status($R,$Cb);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$Nb){foreach($Nb["source"]as$V)$K[$V][]=$Nb;}return$K;}function
enum_input($ve,$c,$l,$W,$sb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Cc);$K=($sb!==null?"<label><input type='$ve'$c value='$sb'".((is_array($W)?in_array($sb,$W):$W===0)?" checked":"")."><i>".'prázdné'."</i></label>":"");foreach($Cc[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Fa=(is_int($W)?$W==$q+1:(is_array($W)?in_array($q+1,$W):$W===$V));$K.=" <label><input type='$ve'$c value='".($q+1)."'".($Fa?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$K;}function
input($l,$W,$o){global$f,$xe,$b,$v;$D=h(bracket_escape($l["field"]));echo"<td class='function'>";if(is_array($W)&&!$o){$na=array($W);if(version_compare(PHP_VERSION,5.4)>=0)$na[]=JSON_PRETTY_PRINT;$W=call_user_func_array('json_encode',$na);$o="json";}$Bd=($v=="mssql"&&$l["auto_increment"]);if($Bd&&!$_POST["save"])$o=null;$Tb=(isset($_GET["select"])||$Bd?array("orig"=>'původní'):array())+$b->editFunctions($l);$c=" name='fields[$D]'";if($l["type"]=="enum")echo
nbsp($Tb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Ib=0;foreach($Tb
as$x=>$V){if($x===""||!$V)break;$Ib++;}$Tc=($Ib?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Ib > f.selectedIndex) f.selectedIndex = $Ib;\" onkeyup='keyupChange.call(this);'":"");$c.=$Tc;$Yb=(in_array($o,$Tb)||isset($Tb[$o]));echo(count($Tb)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Tb,$o===null||$Yb?$o:"")."</select>":nbsp(reset($Tb))).'<td>';$mc=$b->editInput($_GET["edit"],$l,$c,$W);if($mc!="")echo$mc;elseif(preg_match('~bool~',$l["type"]))echo"<input type='hidden'$c value='0'>"."<input type='checkbox'".(in_array(strtolower($W),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$c value='1'>";elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Cc);foreach($Cc[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Fa=(is_int($W)?($W>>$q)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$D][$q]' value='".(1<<$q)."'".($Fa?' checked':'')."$Tc>".h($b->editVal($V,$l)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Tc>";elseif(($he=preg_match('~text|lob~',$l["type"]))||preg_match("~\n~",$W)){if($he&&$v!="sqlite")$c.=" cols='50' rows='12'";else{$M=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}elseif($o=="json"||preg_match('~^jsonb?$~',$l["type"]))echo"<textarea$c cols='50' rows='12' class='jush-js'>".h($W).'</textarea>';else{$Hc=(!preg_match('~int~',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$A)?((preg_match("~binary~",$l["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$l["unsigned"]?1:0)):($xe[$l["type"]]?$xe[$l["type"]]+($l["unsigned"]?0:1):0));if($v=='sql'&&$f->server_info>=5.6&&preg_match('~time~',$l["type"]))$Hc+=7;echo"<input".((!$Yb||$o==="")&&preg_match('~(?<!o)int~',$l["type"])&&!preg_match('~\[\]~',$l["full_type"])?" type='number'":"")." value='".h($W)."'".($Hc?" data-maxlength='$Hc'":"").(preg_match('~char|binary~',$l["type"])&&$Hc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$gc=bracket_escape($l["field"]);$o=$_POST["function"][$gc];$W=$_POST["fields"][$gc];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if($o=="json"){$o="";$W=json_decode($W,true);if(!is_array($W))return
false;return$W;}if(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads")){$Eb=get_file("fields-$gc");if(!is_string($Eb))return
false;return
q($Eb);}return$b->processInput($l,$W,$o);}function
fields_from_edit(){global$i;$K=array();foreach((array)$_POST["field_keys"]as$x=>$V){if($V!=""){$V=bracket_escape($V);$_POST["function"][$V]=$_POST["field_funs"][$x];$_POST["fields"][$V]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$V){$D=bracket_escape($x,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$i->primary),);}return$K;}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Qb=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$f->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Qb){echo"<ul>\n";$Qb=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($Qb?"</ul>":"<p class='message'>".'Žádné tabulky.')."\n";}function
dump_headers($fc,$Kc=false){global$b;$K=$b->dumpHeaders($fc,$Kc);$cd=$_POST["output"];if($cd!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($fc).".$K".($cd!="file"&&!preg_match('~[^0-9a-z]~',$cd)?".$cd":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$x=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$L[$x]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($o,$d){return($o?($o=="unixepoch"?"DATETIME($d, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$d)"):$d);}function
get_temp_dir(){$K=ini_get("upload_tmp_dir");if(!$K){if(function_exists('sys_get_temp_dir'))$K=sys_get_temp_dir();else{$Fb=@tempnam("","");if(!$Fb)return
false;$K=dirname($Fb);unlink($Fb);}}return$K;}function
password_file($Va){$Fb=get_temp_dir()."/adminer.key";$K=@file_get_contents($Fb);if($K||!$Va)return$K;$Rb=@fopen($Fb,"w");if($Rb){chmod($Fb,0660);$K=rand_string();fwrite($Rb,$K);fclose($Rb);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($V,$z,$l,$ie){global$b,$aa;if(is_array($V)){$K="";foreach($V
as$w=>$U)$K.="<tr>".($V!=array_values($V)?"<th>".h($w):"")."<td>".select_value($U,$z,$l,$ie);return"<table cellspacing='0'>$K</table>";}if(!$z)$z=$b->selectLink($V,$l);if($z===null){if(is_mail($V))$z="mailto:$V";if($rd=is_url($V))$z=(($rd=="http"&&$aa)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$V:"https://www.adminer.org/redirect/?url=".urlencode($V));}$K=$b->editVal($V,$l);if($K!==null){if($K==="")$K="&nbsp;";elseif(!is_utf8($K))$K="\0";elseif($ie!=""&&is_shortable($l))$K=shorten_utf8($K,max(0,+$ie));else$K=h($K);}return$b->selectVal($K,$z,$l,$V);}function
is_mail($pb){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$ib='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$H="$pa+(\\.$pa+)*@($ib?\\.)+$ib";return
is_string($pb)&&preg_match("(^$H(,\\s*$H)*\$)i",$pb);}function
is_url($Q){$ib='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($ib?\\.)+$ib(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$A)?strtolower($A[1]):"");}function
is_shortable($l){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$l["type"]);}function
count_rows($R,$Y,$u,$p){global$v;$I=" FROM ".table($R).($Y?" WHERE ".implode(" AND ",$Y):"");return($u&&($v=="sql"||count($p)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$p).")$I":"SELECT COUNT(*)".($u?" FROM (SELECT 1$I$Ub) x":$I));}function
slow_query($I){global$b,$re;$h=$b->database();$le=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($h==""||$g->select_db($h))){$rc=$g->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$re,'&kill=',$rc,'\');
}, ',1000*$le,');
</script>
';}else$g=null;ob_flush();flush();$K=@get_key_vals($I,$g,$le);if($g){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$wd=rand(1,1e6);return($wd^$_SESSION["token"]).":$wd";}function
verify_token(){list($re,$wd)=explode(":",$_POST["token"]);return($wd^$_SESSION["token"])==$re;}function
lzw_decompress($za){$gb=256;$_a=8;$Ka=array();$Cd=0;$Dd=0;for($q=0;$q<strlen($za);$q++){$Cd=($Cd<<8)+ord($za[$q]);$Dd+=8;if($Dd>=$_a){$Dd-=$_a;$Ka[]=$Cd>>$Dd;$Cd&=(1<<$Dd)-1;$gb++;if($gb>>$_a)$_a++;}}$fb=range("\0","\xFF");$K="";foreach($Ka
as$q=>$Ja){$ob=$fb[$Ja];if(!isset($ob))$ob=$Oe.$Oe[0];$K.=$ob;if($q)$fb[]=$Oe.$ob[0];$Oe=$ob;}return$K;}function
on_help($Pa,$Qd=0){return" onmouseover='helpMouseover(this, event, ".h($Pa).", $Qd);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$m,$L,$Ee){global$b,$v,$re,$k;$ee=$b->tableName(table_status1($a,true));page_header(($Ee?'Upravit':'Vložit'),$k,array("select"=>array($a,$ee)),$ee);if($L===false)echo"<p class='error'>".'Žádné řádky.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'Nemáte oprávnění editovat tuto tabulku.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$D=>$l){echo"<tr><th>".$b->fieldName($l);$cb=$_GET["set"][bracket_escape($D)];if($cb===null){$cb=$l["default"];if($l["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$cb,$zd))$cb=$zd[1];}$W=($L!==null?($L[$D]!=""&&$v=="sql"&&preg_match("~enum|set~",$l["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Ee&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$cb)));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$D]:($Ee&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if(preg_match("~time~",$l["type"])&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($m){echo"<input type='submit' value='".'Uložit'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Ee?'Uložit a pokračovat v editaci'."' onclick='return !ajaxForm(this.form, \"".'Ukládá se'.'...", this)':'Uložit a vložit další')."' title='Ctrl+Shift+Enter'>\n";}echo($Ee?"<input type='submit' name='delete' value='".'Smazat'."'".confirm().">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$re,'">
</form>
';}global$b,$f,$jb,$mb,$ub,$k,$Tb,$Vb,$aa,$lc,$v,$ba,$uc,$Sc,$hd,$Xd,$Zb,$re,$ue,$xe,$De,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$fd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$fd[]=true;call_user_func_array('session_set_cookie_params',$fd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Hb);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'cs';}function
lang($te,$Pc=null){if(is_array($te)){$kd=($Pc==1?0:($Pc&&$Pc<5?1:2));$te=$te[$kd];}$te=str_replace("%d","%s",$te);$Pc=format_number($Pc);return
sprintf($te,$Pc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$kd=array_search("SQL",$b->operators);if($kd!==false)unset($b->operators[$kd]);}function
dsn($kb,$T,$G){try{parent::__construct($kb,$T,$G);}catch(Exception$xb){auth_error(h($xb->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($I,$ye=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$jb=array();class
Min_SQL{var$_conn;function
__construct($f){$this->_conn=$f;}function
select($R,$N,$Y,$p,$E=array(),$y=1,$F=0,$od=false){global$b,$v;$u=(count($p)<count($N));$I=$b->selectQueryBuild($N,$Y,$p,$E,$y,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$y&&$p&&$u&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Y?"\nWHERE ".implode(" AND ",$Y):"").($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):""),($y!=""?+$y:null),($F?$y*$F:0),"\n");$Ud=microtime(true);$K=$this->_conn->query($I);if($od)echo$b->selectQuery($I,format_time($Ud));return$K;}function
delete($R,$ud,$y=0){$I="FROM ".table($R);return
queries("DELETE".($y?limit1($I,$ud):" $I$ud"));}function
update($R,$P,$ud,$y=0,$Ld="\n"){$He=array();foreach($P
as$x=>$V)$He[]="$x = $V";$I=table($R)." SET$Ld".implode(",$Ld",$He);return
queries("UPDATE".($y?limit1($I,$ud):" $I$ud"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$nd){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$jb=array("server"=>"MySQL")+$jb;if(!defined("DRIVER")){$ld=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($O="",$T="",$G="",$Za=null,$jd=null,$Rd=null){mysqli_report(MYSQLI_REPORT_OFF);list($dc,$jd)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$dc:ini_get("mysqli.default_host")),($O.$T!=""?$T:ini_get("mysqli.default_user")),($O.$T.$G!=""?$G:ini_get("mysqli.default_pw")),$Za,(is_numeric($jd)?$jd:ini_get("mysqli.default_port")),(!is_numeric($jd)?$jd:$Rd));return$K;}function
set_charset($Da){if(parent::set_charset($Da))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Da");}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$l];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$T,$G){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$T"!=""?$T:ini_get("mysql.default_user")),("$O$T$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Da){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Da,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Da");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($Za){return
mysql_select_db($Za,$this->_link);}function
query($I,$ye=false){$J=@($ye?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$l=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$T,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$T,$G);return
true;}function
set_charset($Da){$this->query("SET NAMES $Da");}function
select_db($Za){return$this->query("USE ".idf_escape($Za));}function
query($I,$ye=false){$this->setAttribute(1000,!$ye);return
parent::query($I,$ye);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$nd){$e=array_keys(reset($M));$md="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$He=array();foreach($e
as$x)$He[$x]="$x = VALUES($x)";$ae="\nON DUPLICATE KEY UPDATE ".implode(", ",$He);$He=array();$yc=0;foreach($M
as$P){$W="(".implode(", ",$P).")";if($He&&(strlen($md)+$yc+strlen($W)+strlen($ae)>1e6)){if(!queries($md.implode(",\n",$He).$ae))return
false;$He=array();$yc=0;}$He[]=$W;$yc+=strlen($W)+2;}return
queries($md.implode(",\n",$He).$ae);}}function
idf_escape($gc){return"`".str_replace("`","``",$gc)."`";}function
table($gc){return
idf_escape($gc);}function
connect(){global$b,$xe,$Xd;$f=new
Min_DB;$Xa=$b->credentials();if($f->connect($Xa[0],$Xa[1],$Xa[2])){$f->set_charset(charset($f));$f->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($f->server_info,'5.7.8')>=0){$Xd['Řetězce'][]="json";$xe["json"]=4294967295;}return$f;}$K=$f->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Fd=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Fd;return$K;}function
get_databases($Jb){global$f;$K=get_session("dbs");if($K===null){$I=($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Jb?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Y,$y,$Qc=0,$Ld=" "){return" $I$Y".($y!==null?$Ld."LIMIT $y".($Qc?" OFFSET $Qc":""):"");}function
limit1($I,$Y){return
limit($I,$Y,1);}function
db_collation($h,$Na){global$f;$K=null;$Va=$f->result("SHOW CREATE DATABASE ".idf_escape($h),1);if(preg_match('~ COLLATE ([^ ]+)~',$Va,$A))$K=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Va,$A))$K=$Na[$A[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals($f->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($ab){$K=array();foreach($ab
as$h)$K[$h]=count(get_vals("SHOW TABLES IN ".idf_escape($h)));return$K;}function
table_status($D="",$Cb=false){global$f;$K=array();foreach(get_rows($Cb&&$f->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$f;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($f->server_info,'5.6')>=0);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$A);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$A[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$A)?$A[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$g=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$g)as$L){$D=$L["Key_name"];$K[$D]["type"]=($D=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?($L["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$K[$D]["columns"][]=$L["Column_name"];$K[$D]["lengths"][]=($L["Index_type"]=="SPATIAL"?null:$L["Sub_part"]);$K[$D]["descs"][]=null;}return$K;}function
foreign_keys($R){global$f,$Sc;static$H='`(?:[^`]|``)+`';$K=array();$Wa=$f->result("SHOW CREATE TABLE ".table($R),1);if($Wa){preg_match_all("~CONSTRAINT ($H) FOREIGN KEY ?\\(((?:$H,? ?)+)\\) REFERENCES ($H)(?:\\.($H))? \\(((?:$H,? ?)+)\\)(?: ON DELETE ($Sc))?(?: ON UPDATE ($Sc))?~",$Wa,$Cc,PREG_SET_ORDER);foreach($Cc
as$A){preg_match_all("~$H~",$A[2],$Sd);preg_match_all("~$H~",$A[5],$ge);$K[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Sd[0]),"target"=>array_map('idf_unescape',$ge[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$K;}function
view($D){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$x=>$V)asort($K[$x]);return$K;}function
information_schema($h){global$f;return($f->server_info>=5&&$h=="information_schema")||($f->server_info>=5.5&&$h=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
create_database($h,$Ma){return
queries("CREATE DATABASE ".idf_escape($h).($Ma?" COLLATE ".q($Ma):""));}function
drop_databases($ab){$K=apply_queries("DROP DATABASE",$ab,'idf_escape');restart_session();set_session("dbs",null);return$K;}function
rename_database($D,$Ma){$K=false;if(create_database($D,$Ma)){$_d=array();foreach(tables_list()as$R=>$ve)$_d[]=table($R)." TO ".idf_escape($D).".".table($R);$K=(!$_d||queries("RENAME TABLE ".implode(", ",$_d)));if($K)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$K;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$ta="";break;}if($s["type"]=="PRIMARY")$ta=" UNIQUE";}}return" AUTO_INCREMENT$ta";}function
alter_table($R,$D,$m,$Kb,$Qa,$tb,$Ma,$sa,$gd){$ma=array();foreach($m
as$l)$ma[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$ma=array_merge($ma,$Kb);$Vd=($Qa!==null?" COMMENT=".q($Qa):"").($tb?" ENGINE=".q($tb):"").($Ma?" COLLATE ".q($Ma):"").($sa!=""?" AUTO_INCREMENT=$sa":"");if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$ma)."\n)$Vd$gd");if($R!=$D)$ma[]="RENAME TO ".table($D);if($Vd)$ma[]=ltrim($Vd);return($ma||$gd?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$ma).$gd):true);}function
alter_indexes($R,$ma){foreach($ma
as$x=>$V)$ma[$x]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"")."(".implode(", ",$V[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$ma));}function
truncate_tables($fe){return
apply_queries("TRUNCATE TABLE",$fe);}function
drop_views($Je){return
queries("DROP VIEW ".implode(", ",array_map('table',$Je)));}function
drop_tables($fe){return
queries("DROP TABLE ".implode(", ",array_map('table',$fe)));}function
move_tables($fe,$Je,$ge){$_d=array();foreach(array_merge($fe,$Je)as$R)$_d[]=table($R)." TO ".idf_escape($ge).".".table($R);return
queries("RENAME TABLE ".implode(", ",$_d));}function
copy_tables($fe,$Je,$ge){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($fe
as$R){$D=($ge==DB?table("copy_$R"):idf_escape($ge).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Je
as$R){$D=($ge==DB?table("copy_$R"):idf_escape($ge).".".table($R));$Ie=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Ie[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$ve){global$f,$ub,$lc,$xe;$la=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$we="((".implode("|",array_merge(array_keys($xe),$la)).")\\b(?:\\s*\\(((?:[^'\")]|$ub)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$H="\\s*(".($ve=="FUNCTION"?"":$lc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$we";$Va=$f->result("SHOW CREATE $ve ".idf_escape($D),2);preg_match("~\\(((?:$H\\s*,?)*)\\)\\s*".($ve=="FUNCTION"?"RETURNS\\s+$we\\s+":"")."(.*)~is",$Va,$A);$m=array();preg_match_all("~$H\\s*,?~is",$A[1],$Cc,PREG_SET_ORDER);foreach($Cc
as$ed){$D=str_replace("``","`",$ed[2]).$ed[3];$m[]=array("field"=>$D,"type"=>strtolower($ed[5]),"length"=>preg_replace_callback("~$ub~s",'normalize_enum',$ed[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ed[8] $ed[7]"))),"null"=>1,"full_type"=>$ed[4],"inout"=>strtoupper($ed[1]),"collation"=>strtolower($ed[9]),);}if($ve!="FUNCTION")return
array("fields"=>$m,"definition"=>$A[11]);return
array("fields"=>$m,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$I){return$f->query("EXPLAIN ".($f->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Y){return($Y||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Gd){return
true;}function
create_sql($R,$sa){global$f;$K=$f->result("SHOW CREATE TABLE ".table($R),1);if(!$sa)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Za){return"USE ".idf_escape($Za);}function
trigger_sql($R,$Yd){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Yd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($ve){return
get_rows("SHOW $ve STATUS");}function
convert_field($l){if(preg_match("~binary~",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$K){if(preg_match("~binary~",$l["type"]))$K="UNHEX($K)";if($l["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))$K="GeomFromText($K)";return$K;}function
support($Db){global$f;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|routine|trigger|view":""):"")."~",$Db);}function
kill_process($V){return
queries("KILL ".number($V));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$f;return$f->result("SELECT @@max_connections");}$v="sql";$xe=array();$Xd=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Řetězce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),'Binární'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometrie'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$V){$xe+=$V;$Xd[$x]=array_keys($V);}$De=array("unsigned","zerofill","unsigned zerofill");$Xc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Tb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$mb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.3.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='https://www.adminer.org/editor/' target='_blank' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($Va=false){return
password_file($Va);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){global$f;if($f){$ab=$this->databases(false);return(!$ab?$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ab[(information_schema($ab[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($Jb=true){return
get_databases($Jb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Uživatel<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Heslo<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Přihlásit se'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Trvalé přihlášení')."\n";}function
login($Ac,$G){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($de){return
h($de["Comment"]!=""?$de["Comment"]:$de["Name"]);}function
fieldName($l,$E=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($de,$P=""){$a=$de["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'Nová položka'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$ce){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$x=>$V){$D=$this->tableName(table_status($x,true));if($D!=""){$Hd=preg_quote($ce);$Ld="(:|\\s*-)?\\s+";$K[$x]["name"]=(preg_match("(^$Hd$Ld(.+)|^(.+?)$Ld$Hd\$)iu",$D,$A)?$A[2].$A[3]:$D);}else
unset($K[$x]);}return$K;}function
backwardKeysPrint($wa,$L){foreach($wa
as$R=>$va){foreach($va["keys"]as$Oa){$z=ME.'select='.urlencode($R);$q=0;foreach($Oa
as$d=>$V)$z.=where_link($q++,$d,$L[$V]);echo"<a href='".h($z)."'>".h($va["name"])."</a>";$z=ME.'edit='.urlencode($R);foreach($Oa
as$d=>$V)$z.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($L[$V]);echo"<a href='".h($z)."' title='".'Nová položka'."'>+</a> ";}}}function
selectQuery($I,$ke){return"<!--\n".str_replace("--","--><!-- ",$I)."\n($ke)\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(preg_match("~varchar|character varying~",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($M,$Mb){$K=$M;foreach($M[0]as$x=>$V){if(list($R,$r,$D)=$this->_foreignColumn($Mb,$x)){$hc=array();foreach($M
as$L)$hc[$L[$x]]=q($L[$x]);$eb=$this->_values[$R];if(!$eb)$eb=get_key_vals("SELECT $r, $D FROM ".table($R)." WHERE $r IN (".implode(", ",$hc).")");foreach($M
as$C=>$L){if(isset($L[$x]))$K[$C][$x]=(string)$eb[$L[$x]];}}}return$K;}function
selectLink($V,$l){}function
selectVal($V,$z,$l,$bd){$K=($V===null?"&nbsp;":$V);$z=h($z);if(preg_match('~blob|bytea~',$l["type"])&&!is_utf8($V)){$K=lang(array('%d bajt','%d bajty','%d bajtů'),strlen($bd));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$bd))$K="<img src='$z' alt='$K'>";}if(like_bool($l)&&$K!="&nbsp;")$K=($V?'ano':'ne');if($z)$K="<a href='$z'".(is_url($z)?" rel='noreferrer'":"").">$K</a>";if(!$z&&!like_bool($l)&&preg_match('~int|float|double|decimal~',$l["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$l["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($V,$l){if(preg_match('~date|timestamp~',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);return$V;}function
selectColumnsPrint($N,$e){}function
selectSearchPrint($Y,$e,$t){$Y=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Vyhledat'."</legend><div>\n";$qc=array();foreach($Y
as$x=>$V)$qc[$V["col"]]=$x;$q=0;$m=fields($_GET["select"]);foreach($e
as$D=>$db){$l=$m[$D];if(preg_match("~enum~",$l["type"])||like_bool($l)){$x=$qc[$D];$q--;echo"<div>".h($db)."<input type='hidden' name='where[$q][col]' value='".h($D)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'ne','ano'),$Y[$x]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$Y[$x]["val"],($l["null"]?0:null))),"</div>\n";unset($e[$D]);}elseif(is_array($Yc=$this->_foreignKeyOptions($_GET["select"],$D))){if($m[$D]["null"])$Yc[0]='('.'prázdné'.')';$x=$qc[$D];$q--;echo"<div>".h($db)."<input type='hidden' name='where[$q][col]' value='".h($D)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Yc,$Y[$x]["val"],true)."</select></div>\n";unset($e[$D]);}}$q=0;foreach($Y
as$V){if(($V["col"]==""||$e[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'kdekoliv'.")".optionlist($e,$V["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$q][val]' value='".h($V["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'kdekoliv'.")".optionlist($e,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$q][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$e,$t){$ad=array();foreach($t
as$x=>$s){$E=array();foreach($s["columns"]as$V)$E[]=$e[$V];if(count(array_filter($E,'strlen'))>1&&$x!="PRIMARY")$ad[$x]=implode(", ",$E);}if($ad){echo'<fieldset><legend>'.'Seřadit'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$ad,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$y),"</div></fieldset>\n";}function
selectLengthPrint($ie){}function
selectActionPrint($t){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($qb,$e){if($qb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Odesílatel'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Předmět'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Vložit'."'>\n";echo"<p>".'Přílohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($qb)==1?'<input type="hidden" name="email_field" value="'.h(key($qb)).'">':html_select("email_field",$qb)),"<input type='submit' name='email' value='".'Odeslat'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$t){return
array(array(),array());}function
selectSearchProcess($m,$t){$K=array();foreach((array)$_GET["where"]as$x=>$Y){$La=$Y["col"];$Vc=$Y["op"];$V=$Y["val"];if(($x<0?"":$La).$V!=""){$Ra=array();foreach(($La!=""?array($La=>$m[$La]):$m)as$D=>$l){if($La!=""||is_numeric($V)||!preg_match('~int|float|double|decimal~',$l["type"])){$D=idf_escape($D);if($La!=""&&$l["type"]=="enum")$Ra[]=(in_array(0,$V)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$V)).")";else{$je=preg_match('~char|text|enum|set~',$l["type"]);$W=$this->processInput($l,(!$Vc&&$je&&preg_match('~^[^%]+$~',$V)?"%$V%":$V));$Ra[]=$D.($W=="NULL"?" IS".($Vc==">="?" NOT":"")." $W":(in_array($Vc,$this->operators)||$Vc=="="?" $Vc $W":($je?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($x<0&&$V=="0")$Ra[]="$D IS NULL";}}}$K[]=($Ra?"(".implode(" OR ",$Ra).")":"0");}}return$K;}function
selectOrderProcess($m,$t){$jc=$_GET["index_order"];if($jc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($jc!=""?array($t[$jc]):$t)as$s){if($jc!=""||$s["type"]=="INDEX"){$Xb=array_filter($s["descs"]);$db=false;foreach($s["columns"]as$V){if(preg_match('~date|timestamp~',$m[$V]["type"])){$db=true;break;}}$K=array();foreach($s["columns"]as$x=>$V)$K[]=idf_escape($V).(($Xb?$s["descs"][$x]:$db)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Y,$Mb){if($_POST["email_append"])return
true;if($_POST["email"]){$Kd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Zd=$_POST["email_subject"];$B=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Zd.$B",$Cc);$M=get_rows("SELECT DISTINCT $l".($Cc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Cc[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($Y?" AND ".implode(" AND ",$Y):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($M,$Mb)as$L){$Ad=array('{\\'=>'{');foreach($Cc[1]as$V)$Ad['{$'."$V}"]=$this->editVal($L[$V],$m[$V]);$pb=$L[$_POST["email_field"]];if(is_mail($pb)&&send_mail($pb,strtr($Zd,$Ad),strtr($B,$Ad),$_POST["email_from"],$_FILES["email_files"]))$Kd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),$Kd));}return
false;}function
selectQueryBuild($N,$Y,$p,$E,$y,$F){return"";}function
messageQuery($I,$ke){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n".($ke?"($ke)\n":"")."-->";}function
editFunctions($l){$K=array();if($l["null"]&&preg_match('~blob~',$l["type"]))$K["NULL"]='prázdné';$K[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(preg_match('~date|time~',$l["type"]))$K["now"]='teď';if(preg_match('~_(md5|sha1)$~i',$l["field"],$A))$K[]=strtolower($A[1]);return$K;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'původní'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Yc=$this->_foreignKeyOptions($R,$l["field"],$W);if($Yc!==null)return(is_array($Yc)?"<select$c>".optionlist($Yc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Yc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$cc="";if(preg_match('~time~',$l["type"]))$cc='HH:MM:SS';if(preg_match('~date|timestamp~',$l["type"]))$cc='d.m.[rrrr]'.($cc?" [$cc]":"");if($cc)return"<input value='".h($W)."'$c> ($cc)";if(preg_match('~_(md5|sha1)$~i',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$K=$W;if(preg_match('~date|timestamp~',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$A))$K=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$K=($l["type"]=="bit"&&preg_match('~^[0-9]+$~',$W)?$K:q($K));if($W==""&&like_bool($l))$K="0";elseif($W==""&&($l["null"]||!preg_match('~char|text~',$l["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$o))$K="$o($K)";return
unconvert_field($l,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($h){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Yd,$I){global$f;$J=$f->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Yd=="table"){dump_csv(array_keys($L));$Yd="INSERT";}dump_csv($L);}}}function
dumpFilename($fc){return
friendly_url($fc);}function
dumpHeaders($fc,$Kc=false){$_b="csv";header("Content-Type: text/csv; charset=utf-8");return$_b;}function
homepage(){return
true;}function
navigation($Jc){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="https://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Jc=="auth"){$Ib=true;foreach((array)$_SESSION["pwds"]as$X=>$Od){foreach($Od[""]as$T=>$G){if($G!==null){if($Ib){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Ib=false;}echo"<a href='".h(auth_url($X,"",$T))."'>".($T!=""?h($T):"<i>".'prázdné'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($Jc);if($Jc!="db"&&$Jc!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'Žádné tabulky.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Jc){}function
tablesPrint($fe){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($fe
as$L){$D=$this->tableName($L);if(isset($L["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"],"select")." title='".'Vypsat data'."'>$D</a><br>\n";}}function
_foreignColumn($Mb,$d){foreach((array)$Mb[$d]as$Lb){if(count($Lb["source"])==1){$D=$this->rowDescription($Lb["table"]);if($D!=""){$r=idf_escape($Lb["target"][0]);return
array($Lb["table"],$r,$D);}}}}function
_foreignKeyOptions($R,$d,$W=null){global$f;if(list($ge,$r,$D)=$this->_foreignColumn(column_foreign_keys($R),$d)){$K=&$this->_values[$ge];if($K===null){$S=table_status($ge);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $D FROM ".table($ge)." ORDER BY 2"));}if(!$K&&$W!==null)return$f->result("SELECT $D FROM ".table($ge)." WHERE $r = ".q($W));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($me,$k="",$Ca=array(),$ne=""){global$ba,$ca,$b,$jb,$v;page_headers();if(is_ajax()&&$k){page_messages($k);exit;}$oe=$me.($ne!=""?": $ne":"");$pe=strip_tags($oe.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$pe,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.1&amp;driver=mysql",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.1&amp;driver=mysql",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1&amp;driver=mysql",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1&amp;driver=mysql",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ca');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('Jste offline.'),'\';
</script>

<div id="help" class="jush-',$v,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ca!==null){$z=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$jb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Server');if($Ca===false)echo"$O\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ca)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ca)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ca
as$x=>$V){$db=(is_array($V)?$V[1]:h($V));if($db!="")echo"<a href='".h(ME."$x=").urlencode(is_array($V)?$V[0]:$V)."'>$db</a> &raquo; ";}}echo"$me\n";}}echo"<h2>$oe</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($k);$ab=&get_session("dbs");if(DB!=""&&$ab&&!in_array(DB,$ab,true))$ab=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($k){$Fe=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ic=$_SESSION["messages"][$Fe];if($Ic){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ic)."</div>\n";unset($_SESSION["messages"][$Fe]);}if($k)echo"<div class='error'>$k</div>\n";}function
page_footer($Jc=""){global$b,$re;echo'</div>

';if($Jc!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Odhlásit" id="logout">
<input type="hidden" name="token" value="',$re,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Jc);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($C){while($C>=2147483648)$C-=4294967296;while($C<=-2147483649)$C+=4294967296;return(int)$C;}function
long2str($U,$Le){$Fd='';foreach($U
as$V)$Fd.=pack('V',$V);if($Le)return
substr($Fd,0,end($U));return$Fd;}function
str2long($Fd,$Le){$U=array_values(unpack('V*',str_pad($Fd,4*ceil(strlen($Fd)/4),"\0")));if($Le)$U[]=strlen($Fd);return$U;}function
xxtea_mx($Z,$Pe,$be,$w){return
int32((($Z>>5&0x7FFFFFF)^$Pe<<2)+(($Pe>>3&0x1FFFFFFF)^$Z<<4))^int32(($be^$Pe)+($w^$Z));}function
encrypt_string($Wd,$x){if($Wd=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$U=str2long($Wd,true);$C=count($U)-1;$Z=$U[$C];$Pe=$U[0];$sd=floor(6+52/($C+1));$be=0;while($sd-->0){$be=int32($be+0x9E3779B9);$lb=$be>>2&3;for($dd=0;$dd<$C;$dd++){$Pe=$U[$dd+1];$Lc=xxtea_mx($Z,$Pe,$be,$x[$dd&3^$lb]);$Z=int32($U[$dd]+$Lc);$U[$dd]=$Z;}$Pe=$U[0];$Lc=xxtea_mx($Z,$Pe,$be,$x[$dd&3^$lb]);$Z=int32($U[$C]+$Lc);$U[$C]=$Z;}return
long2str($U,false);}function
decrypt_string($Wd,$x){if($Wd=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$U=str2long($Wd,false);$C=count($U)-1;$Z=$U[$C];$Pe=$U[0];$sd=floor(6+52/($C+1));$be=int32($sd*0x9E3779B9);while($be){$lb=$be>>2&3;for($dd=$C;$dd>0;$dd--){$Z=$U[$dd-1];$Lc=xxtea_mx($Z,$Pe,$be,$x[$dd&3^$lb]);$Pe=int32($U[$dd]-$Lc);$U[$dd]=$Pe;}$Z=$U[$C];$Lc=xxtea_mx($Z,$Pe,$be,$x[$dd&3^$lb]);$Pe=int32($U[0]-$Lc);$U[0]=$Pe;$be=int32($be-0x9E3779B9);}return
long2str($U,true);}$f='';$Zb=$_SESSION["token"];if(!$Zb)$_SESSION["token"]=rand(1,1e6);$re=get_token();$hd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($x)=explode(":",$V);$hd[$x]=$V;}}function
add_invalid_login(){global$b;$Fb=get_temp_dir()."/adminer.invalid";$Rb=@fopen($Fb,"r+");if(!$Rb){$Rb=@fopen($Fb,"w");if(!$Rb)return;}flock($Rb,LOCK_EX);$oc=unserialize(stream_get_contents($Rb));$ke=time();if($oc){foreach($oc
as$pc=>$V){if($V[0]<$ke)unset($oc[$pc]);}}$nc=&$oc[$b->bruteForceKey()];if(!$nc)$nc=array($ke+30*60,0);$nc[1]++;$Md=serialize($oc);rewind($Rb);fwrite($Rb,$Md);ftruncate($Rb,strlen($Md));flock($Rb,LOCK_UN);fclose($Rb);}$ra=$_POST["auth"];if($ra){$oc=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$nc=$oc[$b->bruteForceKey()];$Nc=($nc[1]>30?$nc[0]-time():0);if($Nc>0)auth_error(lang(array('Příliš mnoho pokusů o přihlášení, zkuste to znovu za %d minutu.','Příliš mnoho pokusů o přihlášení, zkuste to znovu za %d minuty.','Příliš mnoho pokusů o přihlášení, zkuste to znovu za %d minut.'),ceil($Nc/60)));session_regenerate_id();$X=$ra["driver"];$O=$ra["server"];$T=$ra["username"];$G=(string)$ra["password"];$h=$ra["db"];set_password($X,$O,$T,$G);$_SESSION["db"][$X][$O][$T][$h]=true;if($ra["permanent"]){$x=base64_encode($X)."-".base64_encode($O)."-".base64_encode($T)."-".base64_encode($h);$pd=$b->permanentLogin(true);$hd[$x]="$x:".base64_encode($pd?encrypt_string($G,$pd):"");cookie("adminer_permanent",implode(" ",$hd));}if(count($_POST)==1||DRIVER!=$X||SERVER!=$O||$_GET["username"]!==$T||DB!=$h)redirect(auth_url($X,$O,$T,$h));}elseif($_POST["logout"]){if($Zb&&!verify_token()){page_header('Odhlásit','Neplatný token CSRF. Odešlete formulář znovu.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlášení proběhlo v pořádku.');}}elseif($hd&&!$_SESSION["pwds"]){session_regenerate_id();$pd=$b->permanentLogin();foreach($hd
as$x=>$V){list(,$Ha)=explode(":",$V);list($X,$O,$T,$h)=array_map('base64_decode',explode("-",$x));set_password($X,$O,$T,decrypt_string(base64_decode($Ha),$pd));$_SESSION["db"][$X][$O][$T][$h]=true;}}function
unset_permanent(){global$hd;foreach($hd
as$x=>$V){list($X,$O,$T,$h)=array_map('base64_decode',explode("-",$x));if($X==DRIVER&&$O==SERVER&&$T==$_GET["username"]&&$h==DB)unset($hd[$x]);}cookie("adminer_permanent",implode(" ",$hd));}function
auth_error($k){global$b,$Zb;$Pd=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Pd]||$_GET[$Pd])&&!$Zb)$k='Session vypršela, přihlašte se prosím znovu.';else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$k.='<br>'.sprintf('Platnost hlavního hesla vypršela. <a href="https://www.adminer.org/cs/extension/" target="_blank">Implementujte</a> metodu %s, aby platilo stále.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Pd]&&$_GET[$Pd]&&ini_bool("session.use_only_cookies"))$k='Session proměnné musí být povolené.';$fd=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$fd["lifetime"]);page_header('Přihlásit se',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Žádné rozšíření',sprintf('Není dostupné žádné z podporovaných PHP rozšíření (%s).',implode(", ",$ld)),false);page_footer("auth");exit;}$f=connect();}$i=new
Min_Driver($f);if(!is_object($f)||($Ac=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($f)?h($f):(is_string($Ac)?$Ac:'Neplatné přihlašovací údaje.')));if($ra&&$_POST["token"])$_POST["token"]=$re;$k='';if($_POST){if(!verify_token()){$kc="max_input_vars";$Gc=ini_get($kc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$V=ini_get($x);if($V&&(!$Gc||$V<$Gc)){$kc=$x;$Gc=$V;}}}$k=(!$_POST["token"]&&$Gc?sprintf('Byl překročen maximální povolený počet polí. Zvyšte prosím %s.',"'$kc'"):'Neplatný token CSRF. Odešlete formulář znovu.'.' '.'Pokud jste tento požadavek neposlali z Adminera, tak tuto stránku zavřete.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'Velký SQL soubor můžete nahrát pomocí FTP a importovat ho ze serveru.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
email_header($ac){return"=?UTF-8?B?".base64_encode($ac)."?=";}function
send_mail($pb,$Zd,$B,$Sb="",$Gb=array()){$j=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$B=str_replace("\n",$j,wordwrap(str_replace("\r","","$B\n")));$Ba=uniqid("boundary");$qa="";foreach((array)$Gb["error"]as$x=>$V){if(!$V)$qa.="--$Ba$j"."Content-Type: ".str_replace("\n","",$Gb["type"][$x]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Gb["name"][$x])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Gb["tmp_name"][$x])),76,$j).$j;}$ya="";$bc="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$Ba--$j";$ya="--$Ba$j$bc$j$j";$bc="Content-Type: multipart/mixed; boundary=\"$Ba\"";}$bc.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Sb?$j."From: ".str_replace("\n","",$Sb):"");return
mail($pb,email_header($Zd),$ya.$B.$qa,$bc);}function
like_bool($l){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$l["full_type"]);}$f->select_db($b->database());$Sc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$jb[DRIVER]='Přihlásit se';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$i->select($a,$N,array(where($_GET,$m)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$Y=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$Ee=(isset($_GET["select"])?$_POST["edit"]:$Y);foreach($m
as$D=>$l){if(!isset($l["privileges"][$Ee?"update":"insert"])||$b->fieldName($l)=="")unset($m[$D]);}if($_POST&&!$k&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"])$_=($Ee?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$_))$_=ME."select=".urlencode($a);$t=indexes($a);$_e=unique_array($_GET["where"],$t);$vd="\nWHERE $Y";if(isset($_POST["delete"]))queries_redirect($_,'Položka byla smazána.',$i->delete($a,$vd,!$_e));else{$P=array();foreach($m
as$D=>$l){$V=process_input($l);if($V!==false&&$V!==null)$P[idf_escape($D)]=$V;}if($Ee){if(!$P)redirect($_);queries_redirect($_,'Položka byla aktualizována.',$i->update($a,$P,$vd,!$_e));if(is_ajax()){page_headers();page_messages($k);exit;}}else{$J=$i->insert($a,$P);$wc=($J?last_id():0);queries_redirect($_,sprintf('Položka%s byla vložena.',($wc?" $wc":"")),$J);}}}$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Y){$N=array();foreach($m
as$D=>$l){if(isset($l["privileges"]["select"])){$oa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$oa="''";if($v=="sql"&&preg_match("~enum|set~",$l["type"]))$oa="1*".idf_escape($D);$N[]=($oa?"$oa AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$i->select($a,$N,array($Y),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$m){if(!$Y){$J=$i->select($a,array("*"),$Y,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($i->primary=>"");}if($L){foreach($L
as$x=>$V){if(!$Y)$L[$x]=null;$m[$x]=array("field"=>$x,"null"=>($x!=$i->primary),"auto_increment"=>($x==$i->primary));}}}edit_form($a,$m,$L,$Ee);}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$t=indexes($a);$m=fields($a);$Ob=column_foreign_keys($a);$Rc="";if($S["Oid"]){$Rc=($v=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Rc));}parse_str($_COOKIE["adminer_import"],$ia);$Ed=array();$e=array();$ie=null;foreach($m
as$x=>$l){$D=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$D!=""){$e[$x]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($l))$ie=$b->selectLengthProcess();}$Ed+=$l["privileges"];}list($N,$p)=$b->selectColumnsProcess($e,$t);$u=count($p)<count($N);$Y=$b->selectSearchProcess($m,$t);$E=$b->selectOrderProcess($m,$t);$y=$b->selectLimitProcess();$Sb=($N?implode(", ",$N):"*".($Rc?", $Rc":"")).convert_fields($e,$m,$N)."\nFROM ".table($a);$Ub=($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ae=>$L){$oa=convert_field($m[key($L)]);$N=array($oa?$oa:idf_escape(key($L)));$Y[]=where_check($Ae,$m);$K=$i->select($a,$N,$Y,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$k){$Ne=$Y;if(!$_POST["all"]&&is_array($_POST["check"])){$Ga=array();foreach($_POST["check"]as$Ea)$Ga[]=where_check($Ea,$m);$Ne[]="((".implode(") OR (",$Ga)."))";}$Ne=($Ne?"\nWHERE ".implode(" AND ",$Ne):"");$nd=$Ce=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$nd=array_flip($s["columns"]);$Ce=($N?$nd:array());break;}}foreach((array)$Ce
as$x=>$V){if(in_array(idf_escape($x),$N))unset($Ce[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Ce===array())$I="SELECT $Sb$Ne$Ub";else{$ze=array();foreach($_POST["check"]as$V)$ze[]="(SELECT".limit($Sb,"\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($V,$m).$Ub,1).")";$I=implode(" UNION ALL ",$ze);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Y,$Ob)){if($_POST["save"]||$_POST["delete"]){$J=true;$ja=0;$P=array();if(!$_POST["delete"]){foreach($e
as$D=>$V){$V=process_input($m[$D]);if($V!==null&&($_POST["clone"]||$V!==false))$P[idf_escape($D)]=($V!==false?$V:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Ce===array()&&is_array($_POST["check"]))||$u){$J=($_POST["delete"]?$i->delete($a,$Ne):($_POST["clone"]?queries("INSERT $I$Ne"):$i->update($a,$P,$Ne)));$ja=$f->affected_rows;}else{foreach((array)$_POST["check"]as$V){$Me="\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($V,$m);$J=($_POST["delete"]?$i->delete($a,$Me,1):($_POST["clone"]?queries("INSERT".limit1($I,$Me)):$i->update($a,$P,$Me)));if(!$J)break;$ja+=$f->affected_rows;}}}$B=lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ja);if($_POST["clone"]&&$J&&$ja==1){$wc=last_id();if($wc)$B=sprintf('Položka%s byla vložena.'," $wc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$B,$J);if(!$_POST["delete"]){edit_form($a,$m,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+klikněte na políčko, které chcete změnit.';else{$J=true;$ja=0;foreach($_POST["val"]as$Ae=>$L){$P=array();foreach($L
as$x=>$V){$x=bracket_escape($x,1);$P[idf_escape($x)]=(preg_match('~char|text~',$m[$x]["type"])||$V!=""?$b->processInput($m[$x],$V):"NULL");}$J=$i->update($a,$P," WHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($Ae,$m),!($u||$Ce===array())," ");if(!$J)break;$ja+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ja),$J);}}elseif(!is_string($Eb=get_file("csv_file",true)))$k=upload_error($Eb);elseif(!preg_match('~~u',$Eb))$k='Soubor musí být v kódování UTF-8.';else{cookie("adminer_import","output=".urlencode($ia["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Oa=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Eb,$Cc);$ja=count($Cc[0]);$i->begin();$Ld=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($Cc[0]as$x=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$Ld]*)$Ld~",$V.$Ld,$Dc);if(!$x&&!array_diff($Dc[1],$Oa)){$Oa=$Dc[1];$ja--;}else{$P=array();foreach($Dc[1]as$q=>$La)$P[idf_escape($Oa[$q])]=($La==""&&$m[$Oa[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$La))));$M[]=$P;}}$J=(!$M||$i->insertUpdate($a,$M,$nd));if($J)$J=$i->commit();queries_redirect(remove_from_uri("page"),lang(array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),$ja),$J);$i->rollback();}}}$ee=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Vypsat'.": $ee",$k);$P=null;if(isset($Ed["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$V){if(count($Ob[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!preg_match('~[_%]~',$V["val"]))))$P.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$P);if(!$e&&support("table"))echo"<p class='error'>".'Nepodařilo se vypsat tabulku'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$e);$b->selectSearchPrint($Y,$e,$t);$b->selectOrderPrint($E,$e,$t);$b->selectLimitPrint($y);$b->selectLengthPrint($ie);$b->selectActionPrint($t);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$n=$f->result(count_rows($a,$Y,$u,$p));$F=floor(max(0,$n-1)/$y);}$Id=$N;if(!$Id){$Id[]="*";if($Rc)$Id[]=$Rc;}$Ua=convert_fields($e,$m,$N);if($Ua)$Id[]=substr($Ua,2);$J=$i->select($a,$Id,$Y,$p,$E,$y,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$F)$J->seek($y*$F);$rb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$v=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$y&&$p&&$u&&$v=="sql")$n=$f->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".'Žádné řádky.'."\n";else{$xa=$b->backwardKeys($a,$ee);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$p&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Změnit'."</a>");$Mc=array();$Tb=array();reset($N);$xd=1;foreach($M[0]as$x=>$V){if($x!=$Rc){$V=$_GET["columns"][key($N)];$l=$m[$N?($V?$V["col"]:current($N)):$x];$D=($l?$b->fieldName($l,$xd):($V["fun"]?"*":$x));if($D!=""){$xd++;$Mc[$x]=$D;$d=idf_escape($x);$ec=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$db="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ec.($E[0]==$d||$E[0]==$x||(!$E&&$u&&$p[0]==$d)?$db:'')).'">';echo
apply_sql_function($V["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($ec.$db)."' title='".'sestupně'."' class='text'> ↓</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.'Vyhledat'.'" class="text jsonly"> =</a>';echo"</span>";}$Tb[$x]=$V["fun"];next($N);}}$zc=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$x=>$V)$zc[$x]=max($zc[$x],min(40,strlen(utf8_decode($V))));}}echo($xa?"<th>".'Vztahy':"")."</thead>\n";if(is_ajax()){if($y%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$Ob)as$C=>$L){$_e=unique_array($M[$C],$t);if(!$_e){$_e=array();foreach($M[$C]as$x=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$_e[$x]=$V;}}$Ae="";foreach($_e
as$x=>$V){if(($v=="sql"||$v=="pgsql")&&strlen($V)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($v=='sql'&&preg_match("~^utf8_~",$m[$x]["collation"])?$x:"CONVERT($x USING ".charset($f).")").")";$V=md5($V);}$Ae.="&".($V!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($V):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$p&&$N?"":"<td>".checkbox("check[]",substr($Ae,1),in_array(substr($Ae,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($u||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Ae)."'>".'upravit'."</a>"));foreach($L
as$x=>$V){if(isset($Mc[$x])){$l=$m[$x];if($V!=""&&(!isset($rb[$x])||$rb[$x]!=""))$rb[$x]=(is_mail($V)?$Mc[$x]:"");$z="";if(preg_match('~blob|bytea|raw|file~',$l["type"])&&$V!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($x).$Ae;if(!$z&&$V!==null){foreach((array)$Ob[$x]as$Nb){if(count($Ob[$x])==1||end($Nb["source"])==$x){$z="";foreach($Nb["source"]as$q=>$Sd)$z.=where_link($q,$Nb["target"][$q],$M[$C][$Sd]);$z=($Nb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Nb["db"]),ME):ME).'select='.urlencode($Nb["table"]).$z;if($Nb["ns"])$z=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($Nb["ns"]),$z);if(count($Nb["source"])==1)break;}}}if($x=="COUNT(*)"){$z=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$_e))$z.=where_link($q++,$U["col"],$U["val"],$U["op"]);}foreach($_e
as$w=>$U)$z.=where_link($q++,$w,$U);}$V=select_value($V,$z,$l,$ie);$r=h("val[$Ae][".bracket_escape($x)."]");$W=$_POST["val"][$Ae][bracket_escape($x)];$nb=!is_array($L[$x])&&is_utf8($V)&&$M[$C][$x]==$L[$x]&&!$Tb[$x];$he=preg_match('~text|lob~',$l["type"]);if(($_GET["modify"]&&$nb)||$W!==null){$Wb=h($W!==null?$W:$L[$x]);echo"<td>".($he?"<textarea name='$r' cols='30' rows='".(substr_count($L[$x],"\n")+1)."'>$Wb</textarea>":"<input name='$r' value='$Wb' size='$zc[$x]'>");}else{$Bc=strpos($V,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($Bc?2:($he?1:0)).($nb?"":", '".h('Ke změně této hodnoty použijte odkaz upravit.')."'").");\">$V";}}}if($xa)echo"<td>";$b->backwardKeysPrint($xa,$M[$C]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$yb=true;if($_GET["page"]!="last"){if(!+$y)$n=count($M);elseif($v!="sql"||!$u){$n=($u?false:found_rows($S,$Y));if($n<max(1e4,2*($F+1)*$y))$n=reset(slow_query(count_rows($a,$Y,$u,$p)));else$yb=false;}}if(+$y&&($n===false||$n>$y||$F)){echo"<p class='pages'>";$Ec=($n===false?$F+(count($M)>=$y?2:1):floor(($n-1)/$y));if($v!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($F+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$F).($F>5?" ...":"");for($q=max(1,$F-4);$q<min($Ec,$F+5);$q++)echo
pagination($q,$F);if($Ec>0){echo($F+5<$Ec?" ...":""),($yb&&$n!==false?pagination($Ec,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Ec'>".'poslední'."</a>");}echo(($n===false?count($M)+1:$n-$F*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.'Nahrává se'.'...\');" class="loadmore">'.'Nahrát další data'.'</a>':'');}else{echo'Stránka'.":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($Ec>$F?pagination($F+1,$F).($Ec>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($n!==false?"(".($yb?"":"~ ").lang(array('%d řádek','%d řádky','%d řádků'),$n).") ":"");$hb=($yb?"":"~ ").$n;echo
checkbox("all",1,0,'celý výsledek',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$hb' : checked); selectCount('selected2', this.checked || !checked ? '$hb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Změnit</legend><div>
<input type="submit" value="Uložit"',($_GET["modify"]?'':' title="'.'Ctrl+klikněte na políčko, které chcete změnit.'.'"'),'>
</div></fieldset>
<fieldset><legend>Označené <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat"',confirm(),'>
</div></fieldset>
';}$Pb=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Pb['sql']);break;}}if($Pb){print_fieldset("export",'Export'." <span id='selected2'></span>");$cd=$b->dumpOutput();echo($cd?html_select("output",$cd,$ia["output"])." ":""),html_select("format",$Pb,$ia["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$p&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ia["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($rb,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$re'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$f->query("KILL ".number($_POST["kill"]));elseif(list($R,$r,$D)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$y=11;$J=$f->query("SELECT $r, $D FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$r = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $y");for($q=1;($L=$J->fetch_row())&&$q<$y;$q++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Vyhledat'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);" class="jsonly"><th>'.'Tabulka'.'<td>'.'Řádků'."</thead>\n";foreach(table_status()as$R=>$L){$D=$b->tableName($L);if(isset($L["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$D</a>";$V=format_number($L["Rows"]);echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();