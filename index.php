<?
	$namespace=strtolower(rtrim(base64_encode('com.fscaz.azerpost'),'='));

	$arrUTF8=array(
				array('Ğ','ğ','Ş','ş','İ','ı','Ö','ö','Ü','ü','Ç','ç','Ə','ə'),
				array('&#286;','&#287;','&#350;','&#351;','&#304;','&#305;','&#214;','&#246;','&#220;','&#252;','&#199;','&#231;','&#399;','&#601;')
			);

	function e($s){
		global $arrUTF8;
		return str_replace($arrUTF8[0], $arrUTF8[1], $s);
	}

?>
<style>
	.<?=$namespace?> .hide{
		display:none;
	}
	.<?=$namespace?> .fl{
		float:left;
	}
	.<?=$namespace?> .r{
		margin-left:10px;
	}
	.<?=$namespace?> .margin-registered{
		margin:6px 0 0 9px;
	}
	.<?=$namespace?> .margin-text{
		margin-top:5px;
	}
	.<?=$namespace?> .res-style{
		color:red;
		width:60px;
		font:bold 15px Arial;
		text-align:center;
	}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
	window.lessParcels='<?=json_encode(require("inc/countries_parcels_less.php"))?>';
	window.moreParcels='<?=json_encode(require("inc/countries_parcels_more.php"))?>';
	window.maxFax=24000;
	window.maxWrapper=5000;
	window.minWrapper=1000; 
	window.maxWeight=2000;
	window.AZE=13;
	window.maxParcels=10000;
	window.minPriceLess=50;
	window.minPriceMore=100;
	window.namespace='<?=$namespace?>';
	window[namespace]=jQuery.noConflict();
	window.AJAX='ajax.php';

	Array.prototype.getElements=function(a){
		if(this.length==0) return false;
		_r='.'+namespace+(a=='init'?'':' .'+a)+' [name='+this[0]+']';
		if(this.length>1){
			for(i=1;i<this.length;i++){
				_r+=', .'+namespace+' .'+a+' [name='+this[i]+']';
			}
		}
		return _r;
	};

	eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(m(d){\'1u 1v\';q e=m(){},r=\'=\',k=\'1s\'+\'1t+/\',H=[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1x,-1,-1,-1,x,1A,1C,1G,S,1b,1n,1o,1p,1q,1r,-1,-1,-1,0,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,1I,1J,1K,-1,-1,-1,-1,-1,-1,1L,1W,P,Q,R,G,T,U,V,W,X,Y,Z,1a,1Z,1c,1d,1e,1f,1g,1h,1i,1j,1k,1l,1m,-1,-1,-1,-1,-1];j(d.E&&d.E.K){e=m(a){d.E.K(a)}}m M(a){q b=[],g=0,h,p;a=1w(a);h=a.h;L(g<h){p=a[g];g+=1;j(\'%\'!==p){b.o(p.N(0))}s{p=a[g]+a[g+1];b.o(1z(p,16));g+=2}}t b}m F(a){q b=[],g=0,h=a.h,c,w,D;L(g<h){c=a[g];w=a[g+1];D=a[g+2];j(1B>c){b.o(A.y(c));g+=1}s j(1D<c&&c<1E){b.o(A.y(((c&G)<<6)|(w&x)));g+=2}s{b.o(A.y(((c&15)<<12)|((w&x)<<6)|(D&x)));g+=3}}t b.1F(\'\')}m z(a){q b=\'\',f=M(a),h=f.h,i;I(i=0;i<(h-2);i+=3){b+=k[f[i]>>2];b+=k[((f[i]&B)<<4)+(f[i+1]>>4)];b+=k[((f[i+1]&J)<<2)+(f[i+2]>>6)];b+=k[f[i+2]&1H]}j(h%3){i=h-(h%3);b+=k[f[i]>>2];j((h%3)===2){b+=k[((f[i]&B)<<4)+(f[i+1]>>4)];b+=k[(f[i+1]&J)<<2];b+=r}s{b+=k[(f[i]&B)<<4];b+=r+r}}t b}m C(a){q b,v,l=0,f=[],n=0,u=0;I(l=0;l<a.h;l++){v=a.N(l);b=H[v&1M];j(-1===b){e("1N: 1O 1P (v="+v+") 1Q 1R "+l)}s{u=(u<<6)|b;n+=6;j(n>=8){n-=8;j(r!==a.1S(l)){f.o((u>>n)&1T)}u&=(1<<n)-1}}}j(n){e("1U: 1V O 1X");t 1Y}t F(f)}d.O={z:z,C:C}}(1y));',62,127,'|||||||||||||||bytes|offset|length||if|chrTable|idx|function|leftbits|push|char|var|padding|else|return|leftdata|code|c2|63|fromCharCode|encode|String|0x03|decode|c3|console|utf8Decode|31|binTable|for|0x0f|log|while|utf8Encode|charCodeAt|base64|28|29|30|55|32|33|34|35|36|37|38|||||||||||39|56|41|42|43|44|45|46|47|48|49|50|51|57|58|59|60|61|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz|0123456789|use|strict|encodeURI|62|window|parseInt|52|128|53|191|224|join|54|0x3f|23|24|25|26|0x7F|WARN|Illegal|characters|in|position|charAt|0xFF|ERROR|Corrupted|27|string|null|40|||'.split('|'),0,{}));

	function Double(d){
		d=d.toString().split('.');
		return d[0]+(d[1]?((d[1].length<2)?('.'+d[1]+'0'):'.'+d[1].substr(0,2)):'.00');
	}
	
	function relations(a,b,c){
		if(window[namespace](c).attr('name')==b[1] && (!window[namespace]('.'+namespace+' .'+a+' [name='+b[0]+']:checked').length) && (window[namespace]('.'+namespace+' .'+a+' [name='+b[1]+']:checked').length)){
			window[namespace]('.'+namespace+' .'+a+' [name='+b[0]+']').trigger('click');
		}
		if(window[namespace](c).attr('name')==b[0] && (!window[namespace]('.'+namespace+' .'+a+' [name='+b[0]+']:checked').length) && (window[namespace]('.'+namespace+' .'+a+' [name='+b[1]+']:checked').length)){
			window[namespace]('.'+namespace+' .'+a+' [name='+b[1]+']').trigger('click');
		}
	}

	function run(a,b,c){
		window[namespace](b.getElements(a)).on(c,window[a]);
	}

	function display(e,r,b){
		window[namespace]('.'+namespace+' .'+e+' [name=result]').val(b?r:Double(r.toFixed(2)));
	} 

	function getSum(x,a,b){
		_s=0;
		for(y in x){
			_s=x[y][a][b];
		}
		return _s;
	}

	function getMax(obj){
		_s=null;
		for(x in obj){
			_s=x;
		}
		return _s;
	}

	function start(){
		//Initialize
		run('init',['method'],'change');
		
		//Postcards
		run('postcards',['country','registered','type'],'change');

		//Fax
		run('fax',['country','registered','delivery'],'change');
		run('fax',['pages'],'keyup');
		
		//Money
		run('money',['country','registered','delivery','reception'],'change');
		run('money',['money','text'],'keyup');

		//Package
		run('package',['country','registered','type'],'change');
		run('package',['weight'],'keyup');
		
		//Mbags
		run('mbags',['country','registered','type'],'change');
		run('mbags',['weight'],'keyup');
		
		//Telegrams
		run(
			'telegrams',
			[
				'country','registered','urgent','approval','copy'
			],
			'change'
		);
		run('telegrams',['text'],'keyup');

		//Letters
		run('letters',['country','registered','type'],'change');
		run('letters',['weight'],'keyup');

		//Wrapper
		run('wrapper',['country','registered','type'],'change');
		run('wrapper',['weight'],'keyup');

		//Secogram
		run('secogram',['country'],'change');
		run('secogram',['weight'],'keyup');

		//Insured
		run('insured',['country','type'],'change');
		run('insured',['weight','price'],'keyup');

		//Parcels
		run('parcels',['country','type','fragile','large'],'change');
		run('parcels',['weight','price'],'keyup');

	}

	function init(){
		window[namespace]('.'+namespace+' .hide').removeAttr('style');
		if(window[namespace](this).val()==0) return;
		    

		window[namespace]('.'+namespace+' .'+window[namespace](this).val()).show();
		window[namespace]('.'+namespace+' h4.hide').show();
		
		window[window[namespace](this).val()]();
	}
	
	function fax(){
		relations(arguments.callee.name,['registered','delivery'],this);

		_c=0;
		_v=window[namespace]('.'+namespace+' .fax [name=country]').val();
		_v1=window[namespace]('.'+namespace+' .fax [name=registered]:checked').length;
		_v2=window[namespace]('.'+namespace+' .fax [name=delivery]:checked').length;
		_p=parseInt(window[namespace]('.'+namespace+' .fax [name=pages]').val().trim()) || 0;

		if(_v!=AZE)	_c=1;

		if(_p<=0 || _p>=maxFax){
			display('fax',null,true);
			return;
		}

		window[namespace].post(AJAX,{fax:true},function(dat){
			if(!_p){
				display('fax',null,true);
				return;
			}

			dat=window[namespace].parseJSON(dat);
			
			res=dat[_c][0]+(_p-1)*dat[_c][1];	

			if(_v1){
				res+=_p*dat[_c][2];

				if(_v2){
					res+=dat[_c][3];
				}
			}
			display('fax',res);
		});
	}

	function postcards(){
		res=null;
		
		_v=window[namespace]('.'+namespace+' .postcards [name=country]').val();
		_v1=window[namespace]('.'+namespace+' .postcards [name=registered]:checked').length;
		_v2=window[namespace]('.'+namespace+' .postcards  [name=type]').val();
		
		if(_v==AZE)
			window[namespace]('.'+namespace+' .postcards .for-country').hide();
		else
			window[namespace]('.'+namespace+' .postcards .for-country').show();
		
		
		window[namespace].post(AJAX,{postcards:true},function(dat){
			dat=window[namespace].parseJSON(dat);
		
			if(_v==AZE){
				
				res=dat[0][_v1];
				
			}else{
					
				res=dat[1][_v][_v2][_v1];
			}
			
			display('postcards',res);
		});
	}
	
	function money(){
		relations(arguments.callee.name,['delivery','reception'],this);

		_c=0;
		_v=window[namespace]('.'+namespace+' .money [name=country]').val();
		_v1=parseInt(window[namespace]('.'+namespace+' .money [name=money]').val().trim()) || 0;
		_v2=window[namespace]('.'+namespace+' .money [name=delivery]:checked').length;
		_v3=window[namespace]('.'+namespace+' .money [name=registered]:checked').length;
		_v4=window[namespace]('.'+namespace+' .money [name=text]').val().trim();
		_v5=window[namespace]('.'+namespace+' .money [name=reception]:checked').length;
			
		if(_v==AZE){
			window[namespace]('.'+namespace+' .money .for-registered, .'+namespace+' .money .for-text').show();
		}else{
			window[namespace]('.'+namespace+' .money .for-registered, .'+namespace+' .money .for-text').hide(); 
			_c=1;
		}

		if(_v1<=0){
			display('money',null,true);
			return;
		};

		window[namespace].post(AJAX,{money:true},function(dat){
			dat=window[namespace].parseJSON(dat);
			res=null;
			
			_max=getMax(dat[_c][1]);
			for(y in x=dat[_c][1]){

				if(_v1<parseInt(y)){
					res+=x[y];
					break;
				}
				
				if(y==_max){
					res+=x[y]+dat[_c][0][1];
					if(_v1-y>=dat[_c][0][0])
						res+=parseInt((_v1-y)/dat[_c][0][0])*dat[_c][0][1];
				}
			}	

			if(_v2){
				res+=dat[_c][0][2];	
				if(_v5){
					res+=dat[_c][0][3];		
				}	
			}

			if(_v==AZE){
				if(_v3){
					res+=dat[_c][0][4];
				}
				
				if(_v4!=''){
					res+=dat[_c][0][5]*(_v4.split(' ').length);
				}
			}


			display('money',res);
		});
	}

	function package(){

		_v=window[namespace]('.'+namespace+' .package [name=country]').val();
		_v1=window[namespace]('.'+namespace+' .package [name=registered]:checked').length;
		_v2=parseInt(window[namespace]('.'+namespace+' .package [name=weight]').val().trim()) || 0;
		_v3=window[namespace]('.'+namespace+' .package [name=type]').val();
		
		if(_v2<=0 || _v2>=maxWeight){
			display('package',null,true);
			return;
		}

		window[namespace].post(AJAX,{package:true},function(dat){
			res=0;
			dat=window[namespace].parseJSON(dat);
		
			for(y in x=dat[0]){

				if(_v2<parseInt(y)){
					res+=x[y][_v][_v3];
					break;
				}
			}	
			if(_v1){
				res+=dat[1][_v][_v3];		
			}

			display('package',res);
		});
	}

	function mbags(){

		_v=window[namespace]('.'+namespace+' .mbags [name=country]').val();
		_v1=window[namespace]('.'+namespace+' .mbags [name=registered]:checked').length;
		_v2=parseInt(window[namespace]('.'+namespace+' .mbags [name=weight]').val().trim()) || 0;
		_v3=window[namespace]('.'+namespace+' .mbags [name=type]').val();
		
		if(_v2<=0){
			display('mbags',null,true);
			return;
		};

		window[namespace].post(AJAX,{mbags:true},function(dat){
			res=null;
			dat=window[namespace].parseJSON(dat);
		
			res+=dat[2][_v][_v3];
			if(_v2>=dat[1]){
				res+=dat[3][_v][_v3];
				if(_v2-dat[1]>=dat[0])
					res+=parseInt((_v2-dat[1])/dat[0])*dat[3][_v][_v3];	
			}	
			if(_v1){
				res+=dat[4][_v][_v3];		
			}
			
			display('mbags',res);
		});
	}

	function telegrams(){
		_c=0;
		_v=window[namespace]('.'+namespace+' .telegrams [name=country]').val();
		_v1=window[namespace]('.'+namespace+' .telegrams [name=registered]:checked').length;
		_v2=window[namespace]('.'+namespace+' .telegrams [name=text]').val().trim();
		_v3=window[namespace]('.'+namespace+' .telegrams [name=urgent]:checked').length;
		_v4=window[namespace]('.'+namespace+' .telegrams [name=approval]:checked').length;
		_v5=window[namespace]('.'+namespace+' .telegrams [name=copy]:checked').length;
		
		if(_v==AZE) 
			window[namespace]('.'+namespace+' .telegrams .for-registered').show(); 
		else
			window[namespace]('.'+namespace+' .telegrams .for-registered').hide(); 	

		if(_v2==''){
			display('telegrams',null,true);
			return;
		}

		window[namespace].post(AJAX,{telegrams:true},function(dat){
			res=null;
			dat=window[namespace].parseJSON(dat);
	
			_t=_v2.split(' ');

			if(_v==AZE){
				res+=dat[0][_v3][0];

				for(i=0;i<_t.length;i++){
					_s=_t[i].length;
					
					if(_s>=dat[2]){
						res+=parseInt(_s/dat[2])*dat[0][_v3][1];
						if(_s%dat[2]>0) res+=dat[0][_v3][1]; 
					}else{
						res+=dat[0][_v3][1];
					}
				}
				if(_v1)	res+=dat[0][2];

			}else{
				_c=1;

				res+=dat[1][0];

				for(i=0;i<_t.length;i++){
					_s=_t[i].length;
					if(_s>=dat[2]){
						res+=parseInt(_s/dat[2])*dat[1][1][_v];
						if(_s%dat[2]>0) res+=dat[1][1][_v]; 
					}else{
						res+=dat[1][1][_v];
					}
				}
			}

			if(_v4)	res+=dat[3][_c][0];

			if(_v5)	res+=dat[3][_c][1];

			display('telegrams',res);
		});
	}

	function letters(){
		_c=0;
		_v=window[namespace]('.'+namespace+' .letters [name=country]').val();
		_v1=window[namespace]('.'+namespace+' .letters [name=registered]:checked').length;
		_v2=parseInt(window[namespace]('.'+namespace+' .letters [name=weight]').val().trim()) || 0;
		_v3=window[namespace]('.'+namespace+' .letters [name=type]').val();
		
		
		if(_v==AZE){
			window[namespace]('.'+namespace+' .letters .for-type').hide();
		}else{
			window[namespace]('.'+namespace+' .letters .for-type').show();
			_c=1;
		}

		if(_v2<=0 || _v2>=maxWeight){
			display('letters',null,true);
			return;
		}

		window[namespace].post(AJAX,{letters:true},function(dat){
			res=0;
			dat=window[namespace].parseJSON(dat);

			if(!_c){
			
				for(y in x=dat[_c][0]){
					
					if(_v2<parseInt(y)){
						res+=x[y];
						break;
					} 

				}

				if(_v1){
					res+=dat[_c][1];
				}

			}else{

				for(y in x=dat[_c][0]){

					if(_v2<parseInt(y)){ 
						res+=x[y][_v][_v3];
						break;
					}

				}
				if(_v1){
					res+=dat[_c][1][_v][_v3];
				}

			}

			display('letters',res);
		});
	}

	function wrapper(){
		_c=0;
		_v=window[namespace]('.'+namespace+' .wrapper [name=country]').val();
		_v1=window[namespace]('.'+namespace+' .wrapper [name=registered]:checked').length;
		_v2=parseInt(window[namespace]('.'+namespace+' .wrapper [name=weight]').val().trim()) || 0;
		_v3=parseInt(window[namespace]('.'+namespace+' .wrapper [name=type]').val());
		
		
		if(_v==AZE){
			window[namespace]('.'+namespace+' .wrapper .for-type, .'+namespace+' .wrapper .for-secogram').hide();
		}else{
			window[namespace]('.'+namespace+' .wrapper .for-type').show();
			if(_v3)
				window[namespace]('.'+namespace+' .wrapper .for-secogram').show();
			else
				window[namespace]('.'+namespace+' .wrapper .for-secogram').hide();
			_c=1;
		}


		if(_v2<=0 || _v2>=maxWrapper){
			display('wrapper',null,true);
			return;
		}


		window[namespace].post(AJAX,{wrapper:true},function(dat){
			res=0;
			dat=window[namespace].parseJSON(dat);

			if(_v2>=maxWeight){

				for(y in x=dat[1][_c][0]){
					
					if(_v2<parseInt(y)){ 
						res+=_c?x[y][_v][_v3]:x[y];	
						break;
					}
				}
				if(_v1){
					res+=_c?dat[1][_c][_v1][_v][_v3]:dat[1][_c][_v1];
				}
			}else{
				
				for(y in x=dat[0][_c][0]){
					
					if(_v2<parseInt(y)) {
						res+=_c?x[y][_v][_v3]:x[y];
						break;
					}
				}
				if(_v1){
					res+=_c?dat[0][_c][_v1][_v][_v3]:dat[0][_c][_v1];
				}

			}

			display('wrapper',res);
		});
	}

	function secogram(){

		_v=window[namespace]('.'+namespace+' .secogram [name=country]').val();
		_v2=parseInt(window[namespace]('.'+namespace+' .secogram [name=weight]').val().trim()) || 0;
		_v3=window[namespace]('.'+namespace+' .secogram [name=type]').val();
		
		if(_v2<=0){
			display('secogram',null,true);
			return;
		}

		window[namespace].post(AJAX,{secogram:true},function(dat){
			res=0;
			dat=window[namespace].parseJSON(dat);
		
			if(_v2>=maxWeight){
				_max=getMax(dat[0]);
				res+=dat[0][_max][_v][_v3]+Math.ceil((_v2-maxWeight)/minWrapper)*dat[1][_v][_v3];
			}else{
				for(y in x=dat[0]){
					if(_v2<parseInt(y)){
						res+=x[y][_v][_v3];
						break;
					}
				}	
			}	

			display('secogram',res);
		});
	}

	function insured(){
		_c=0;
		_v=window[namespace]('.'+namespace+' .insured [name=country]').val();
		_v1=parseInt(window[namespace]('.'+namespace+' .insured [name=price]').val().trim()) || 0;
		_v2=parseInt(window[namespace]('.'+namespace+' .insured [name=weight]').val().trim()) || 0;
		_v3=window[namespace]('.'+namespace+' .insured [name=type]').val();
		
		
		if(_v==AZE){
			window[namespace]('.'+namespace+' .insured .for-type').hide();
		}else{
			window[namespace]('.'+namespace+' .insured .for-type').show();
			_c=1;
		}

		if(_v2<=0 || _v2>=maxWeight || _v1<=0){
			display('insured',null,true);
			return;
		}

		window[namespace].post(AJAX,{insured:true},function(dat){
			res=0;
			dat=window[namespace].parseJSON(dat);

			_max=getMax(dat[_c][1]);

			for(y in x=dat[_c][0]){
				
				if(_v2<parseInt(y)) {
					res+=_c?x[y][_v][_v3]:x[y];
					break;
				}
			}
			
			for(y in x=dat[_c][1]){
				
				if(_v1<parseInt(y)){
					res+=x[y];
					break;
				}

				if(y==_max){
					res+=x[y]+dat[_c][2];
					if(_v1-y>=_max)
						res+=parseInt((_v1-y)/_max)*dat[_c][2];
				}
			}
			
			display('insured',res);
		});
	}

	function parcels(){
		_c=0;
		_a=0;
		_m=0;
		_v=window[namespace]('.'+namespace+' .parcels [name=country]').val();
		_v1=parseInt(window[namespace]('.'+namespace+' .parcels [name=price]').val().trim()) || 0;
		_v2=parseInt(window[namespace]('.'+namespace+' .parcels [name=weight]').val().trim()) || 0;
		_v3=window[namespace]('.'+namespace+' .parcels [name=type]').val();
		_v4=window[namespace]('.'+namespace+' .parcels [name=fragile]:checked').length;
		_v5=window[namespace]('.'+namespace+' .parcels [name=large]:checked').length;
		
		if(_v!=AZE)	_c=1;

		if(_v2>=maxParcels) _m=1;

		if(!_v2){
			display('parcels',null,true);
			return;
		}

		window[namespace].post(AJAX,{parcels:true},function(dat){
			res=null;

			if(!_v2){
				display('parcels',res,true);
				return;
			}

			dat=window[namespace].parseJSON(dat);

			if(!_m){
				if(!_c){
					if(_v4 || _v5 || _v1) _m=1;
					res+=dat[_m][1]+dat[_m][0][_v3]*Math.ceil(_v2/minWrapper);
					if(_v1) res+=dat[_m][2]+Math.ceil((_v1-minPriceLess)/minPriceLess)*dat[_m][3];
				}else{
					data=dat;
					lessParcels=(typeof(lessParcels)=='string')?window[namespace].parseJSON(lessParcels):lessParcels;
					dat=lessParcels[base64.decode(_v)][_v3];

					_a=dat[0]+dat[1]*Math.ceil((_v2/minWrapper)*10)/10;

					res+=_a;
					
					if(_v1){
						res+=data[2][0]+data[2][1];
						if(_v1>=minPriceMore)
							res+=parseInt(_v1/minPriceMore)*data[2][2];
					}

					if(_v4 || _v5){
						res+=_a/2;
					}

					if(_v4 || _v5 || _v1){
						res+=data[2][3];
					}

					display('parcels',res);
				}
			}else{
				if(!_c){
					res+=dat[_m][1]+dat[_m][0][_v3]*Math.ceil(_v2/minWrapper);
					if(_v1) res+=dat[_m][2]+Math.ceil((_v1-minPriceLess)/minPriceLess)*dat[_m][3];
				}else{
					data=dat;
					moreParcels=(typeof(moreParcels)=='string')?window[namespace].parseJSON(moreParcels):moreParcels;
					dat=moreParcels[base64.decode(_v)][_v3];
					
					_a=dat[0]+dat[1]*Math.ceil((_v2/minWrapper)*10)/10;
					
					res+=data[2][3]+_a;

					if(_v1){
						res+=data[2][0]+data[2][1];
						if(_v1>=minPriceMore)
							res+=parseInt(_v1/minPriceMore)*data[2][2];
					}

					if(_v4 || _v5){
						res+=_a/2;
					}

					display('parcels',res);
				}
			}

			display('parcels',res);
		});
	}

	window[namespace](start);
</script>
<body>

	<div class="<?=$namespace?>">
		<select name="method">
			<option value="0"><?=e('Zəhmət olmasa poçt xidmətini seçin')?></option>
			<option value="postcards"><?=e('Poçt kartları')?></option>
			<option value="letters"><?=e('Məktublar')?></option>
			<option value="wrapper"><?=e('Banderollar')?></option>
			<option value="secogram"><?=e('Sekoqramlar')?></option>
			<option value="insured"><?=e('Qiyməti bəyan olunmuş göndəriş (məktub və banderol)')?></option>
			<option value="package"><?=e('Kiçik paketlər')?></option>
			<option value="parcels"><?=e('Bağlamalar')?></option>
			<option value="mbags"><?=e('Xüsusi M kisələri')?></option>
			<option value="money"><?=e('Pul baratları')?></option>
			<option value="telegrams"><?=e('Teleqramlar')?></option>
			<!--<option value="fax"><?=e('Faks')?></option>-->
		</select>
		<!--POST CARDS-->
			<div class="postcards hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/>
				<div class="for-country hide">
					<br/>
					<label><?=e('Nəqliyyat:')?></label>
					<select name="type">
						<option value="0"><?=e('Yerüstü')?></option>
						<option value="1"><?=e('Avia')?></option>
					</select>
				</div>
				<br/>
				<label class="fl"><?=e('Sifarişli (*)')?></label>
				<input type="checkbox" name="registered" class="margin-registered"/>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span>
			</div>
		
		<!--LETTERS-->
			<div class="letters hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Məktubun çəkisi:')?></label><br/>
				<input type="text" name="weight" size="20" placeholder="Qram" class="margin-text"/><span class="r">Qram</span>
				<div class="for-type">
					<br/>
					<label><?=e('Nəqliyyat:')?></label>
					<select name="type">
						<option value="0"><?=e('Yerüstü')?></option>
						<option value="1"><?=e('Avia')?></option>
					</select>
				</div>
				<br/><br/>
				<label class="fl"><?=e('Sifarişli (*)')?></label>
				<input type="checkbox" name="registered" class="margin-registered"/>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span> 
			</div>
		
		<!--INSURED-->
			<div class="insured hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Göndərişin çəkisi:')?></label><br/>
				<input type="text" name="weight" size="20" placeholder="Qram" class="margin-text"/><span class="r">Qram</span>
				<br/><br/>
				<label class="fl"><?=e('Bəyan olunan qiymət:')?></label><br/>
				<input type="text" name="price" size="20" placeholder="AZN" class="margin-text"/><span class="r">AZN</span>
				<div class="for-type">
					<br/>
					<label><?=e('Nəqliyyat:')?></label>
					<select name="type">
						<option value="0"><?=e('Yerüstü')?></option>
						<option value="1"><?=e('Avia')?></option>
					</select>
				</div>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span> 
			</div>
		
		<!--WRAPPER-->
			<div class="wrapper hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Banderolun çəkisi:')?></label><br/>
				<input type="text" name="weight" size="20" placeholder="Qram" class="margin-text"/><span class="r">Qram</span>
				<br/>
				<div class="for-type">
					<br/>
					<label><?=e('Nəqliyyat:')?></label>
					<select name="type">
						<option value="0"><?=e('Yerüstü')?></option>
						<option value="1"><?=e('Avia')?></option>
					</select>
				</div>
				<br/>
				<label class="fl"><?=e('Sifarişli (*)')?></label>
				<input type="checkbox" name="registered" class="margin-registered"/>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span> 
			</div>
			
		<!--SECOGRAM-->
			<div class="secogram hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Sekoqramın çəkisi:')?></label><br/>
				<input type="text" name="weight" size="20" placeholder="Qram" class="margin-text"/><span class="r">Qram</span>
				<br/>
				<div class="for-type">
					<br/>
					<label><?=e('Nəqliyyat:')?></label>
					<select name="type">
						<option value="1"><?=e('Avia')?></option>
					</select>
				</div>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span> 
			</div>
			
		<!--PACKAGE-->	
			<div class="package hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Paketin çəkisi:')?></label><br/>
				<input type="text" name="weight" size="20" placeholder="Qram" class="margin-text"/><span class="r">Qram</span>
				<br/><br/>
				<label><?=e('Nəqliyyat:')?></label>
				<select name="type">
					<option value="0"><?=e('Yerüstü')?></option>
					<option value="1"><?=e('Avia')?></option>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Sifarişli (*)')?></label>
				<input type="checkbox" name="registered" class="margin-registered"/>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span> 
			</div>
		
		<!--PARCELS-->	
			<div class="parcels hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=base64_encode($k)?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Bağlamanın çəkisi:')?></label><br/>
				<input type="text" name="weight" size="20" placeholder="Qram" class="margin-text"/><span class="r">Qram</span>
				<br/><br/>
				<label><?=e('Nəqliyyat:')?></label>
				<select name="type">
					<option value="0"><?=e('Yerüstü')?></option>
					<option value="1"><?=e('Avia')?></option>
				</select>
				<div class="for-type">
					<br/>
					<label class="fl"><?=e('Bəyan olunan qiymət:')?></label><br/>
					<input type="text" name="price" size="20" placeholder="AZN" class="margin-text"/><span class="r">AZN</span>
					<br/><br/>
					<label class="fl"><?=e('Kövrək (*)')?></label>
					<input type="checkbox" name="fragile" class="margin-registered"/>
					<br/><br/>
					<label class="fl"><?=e('İriölçülü (*)')?></label>
					<input type="checkbox" name="large" class="margin-registered"/>
				</div>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span> 
			</div>
			
		<!--M BAGS-->	
			<div class="mbags hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('M kisənin çəkisi:')?></label><br/>
				<input type="text" name="weight" size="20" placeholder="Qram" class="margin-text"/><span class="r">Qram</span>
				<br/><br/>
				<label><?=e('Nəqliyyat:')?></label>
				<select name="type">
					<option value="0"><?=e('Yerüstü')?></option>
					<option value="1"><?=e('Avia')?></option>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Sifarişli (*)')?></label>
				<input type="checkbox" name="registered" class="margin-registered"/>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span> 
			</div>
	
		<!--MONEY-->	
			<div class="money hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Köçürülən məbləğ:')?></label><br/>
				<input type="text" name="money" size="20" placeholder="AZN" class="margin-text"/><span class="r">AZN</span>
				<div class="for-text">
					<br/>
					<label class="fl"><?=e('Pul baratında yazılı məlumat (*):')?></label><br/>
					<input type="text" name="text" size="30" class="margin-text"/>
				</div>
				<br/><br/>
				<label class="fl"><?=e('Pul baratının evə çatdırılması (*):')?></label>
				<input type="checkbox" name="delivery" class="margin-registered"/>
				<br/><br/>
				<label class="fl"><?=e('Pul baratının evdə qəbulu (*):')?></label>
				<input type="checkbox" name="reception" class="margin-registered"/>
				<div class="for-registered">
					<br/><br/>
					<label class="fl"><?=e('Çatdırmaya dair elektron xəbərnamə (*):')?></label>
					<input type="checkbox" name="registered" class="margin-registered"/>
				</div>
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span>
			</div>
			
		<!--TELEGRAMS-->	
			<div class="telegrams hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries_telegrams.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label class="fl"><?=e('Teleqram Mətni:')?></label><br/>
				<input type="text" name="text" size="30" class="margin-text"/> 
				<br/>
				<div class="for-registered">
					<br/>
					<label class="fl"><?=e('Təcili teleqram (*):')?></label>
					<input type="checkbox" name="urgent" class="margin-registered"/>
					<!--
					<br/><br/>
					<label class="fl"><?=e('Teleqramın məktubla çatdırılması (*):')?></label>
					<input type="checkbox" name="registered" class="margin-registered"/>
					-->
				</div>
				<!--
				<br/>
				<label class="fl"><?=e('"Təsdiq olunmuş" teleqramda təsdiq olunma qeydi (*):')?></label>
				<input type="checkbox" name="approval" class="margin-registered"/>
				<br/><br/>
				<label class="fl"><?=e('Göndəricinin tələbi ilə teleqramın surətinin təsdiqi (*):')?></label>
				<input type="checkbox" name="copy" class="margin-registered"/>
				-->
				<br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span>
				<h4><?=e('Alıcı və göndəricinin ünvanı mətnə daxildir!')?></h4>
			</div>	
	
		<!--FAX-->	
			<div class="fax hide">
				<br/>
				<label><?=e('Ölkə:')?></label>
				<select name="country">
					<option value="13"><?=e('Azərbaycan')?></option>
					<?foreach(include('inc/countries.php') as $k=>$c):?>
						<option value="<?=$c?>"><?=e($k)?></option>
					<?endforeach?>
				</select>
				<br/><br/>
				<label><?=e('Səhifələrin sayı:')?></label>
				<input type="text" name="pages" value="" class="margin-registered" size="10">
				<br/><br/>
				<label class="fl"><?=e('Daxil olan faksın PŞ-də verilməsi (*):')?></label>
				<input type="checkbox" name="registered" class="margin-registered"/>
				<br/>
				<br/>
				<label class="fl"><?=e('Daxil olan faksın ünvan üzrə çatdırılması (*):')?></label>
				<input type="checkbox" name="delivery" class="margin-registered"/>
				<br/><br/><br/>
				<label><?=e('Nəticə:')?></label>
				<input type="text" value="" disabled="disabled" name="result" class="res-style"/>
				<span>AZN</span>
			</div>	
			<h4 class="hide"><?=e('Ulduzla işarələnmiş xanalar əlavə xidmət növləridir')?></h4>
	</div>