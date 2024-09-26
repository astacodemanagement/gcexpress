var tableConfig={elem:'#dbGrid',size:'sm',even:true,height:'full-125',limits:[10,20,50,100,200,500,1000,2000,5000,10000,20000,50000],limit:50,page:true};function getFormData(formObj){var data={};var formData=formObj.serializeArray();$.each(formData,function(){data[this.name]=this.value;});return data;}
function refreshTable(){$('.layui-laypage-btn').trigger('click');}
function setUserinfo(key,val,expires){val=JSON.stringify(val);if(typeof expires=='undefined'){$.cookie(key,val,{path:'/'});}else{$.cookie(key,val,{path:'/',expires:expires});}}
function getUserinfo(key){var val=$.cookie(key);if(val){return JSON.parse(val);}else{return null;}}
function isJsonString(str){try{if(typeof JSON.parse(str)=="object"){return true;}}catch(e){}
return false;}
function RpcService1(baseUrl){var client={ajax:function(args,dataType){if(args.length==0)args=[{}];var _this=this;args.format="json";args.v="1.0";var def=$.Deferred();$.ajax({type:"POST",url:baseUrl,data:args,success:function(ret){toast.hide();if(typeof ret=='string'){ret=JSON.parse(ret);}
if(args.method=='website.register'||args.method=='website.login'||args.method=='website.createOrder'||args.method=='website.getVerifyCode'||args.method=='website.phoneUpdatePwd'||args.method=='website.checkVerifyCode'||args.method=='user/findMailbox'||args.method=='website.sendEmail'||args.method=='website.emailUpdatePwd'||args.method=='website.cancelOrder'||args.method=='website.updateUserInfo'){def.resolve(ret);return;}
if(ret.code=='20000'||ret.code=='20002'){def.resolve(ret.data);}else{def.reject(ret.code);}},error:function(err){toast.hide();def.reject(err);},dataType:dataType});return def;},onerror:null,invoke:function(args,callback){var promise=this.ajax(args,'json');if(callback){promise.then(callback);}
return promise;},invokep:function(args,callback){var promise=this.ajax(args,'jsonp');if(callback){promise.then(callback);}
return promise;}};client.onerror=function(err){if(typeof parent.layer!='undefined'){layer.closeAll();parent.layer.msg(err,{icon:2});}else if(typeof layer!='undefined'){layer.closeAll();layer.msg(err,{icon:2});}else{alert(err);}};return client;}
function RouterService(baseUrl){var client={ajax:function(args,dataType){if(args.length==0)args=[{}];var _this=this;var def=$.Deferred();var murmur=localStorage.getItem("murmur");args.pId=murmur;args.pst=(murmur+'j&t2020app!@#').MD5(32);$.ajax({type:'POST',url:baseUrl,data:args,dataType:dataType,headers:{'X-SimplyPost-Id':murmur,'X-SimplyPost-Signature':(murmur+'j&t2020app!@#').MD5(32)},success:function(ret){toast.hide();if(typeof ret=='string'){ret=JSON.parse(ret);}
if(args.method=='user/register'||args.method=='user/login'||args.method=='user/createOrder'||args.method=='user/getVerifyCode'||args.method=='user/phoneUpdatePwd'||args.method=='user/checkVerifyCode'||args.method=='user/getVerifyCode'||args.method=='user/findMailbox'||args.method=='user/sendEmail'||args.method=='user/emailUpdatePwd'||args.method=='user/updateUserInfo'||args.method=='address/createExpAddress'||args.method=='address/updateExpAddress'||args.method=='address/deleteExpAddress'||args.method=='user/changeEmail'||args.method=='order/cancelOrder'||args.method=='order/createOrder'||args.method=='query/findIntProCityArea'||args.method=='query/findIntRates'||args.method=='user/sendEmailToNewEmail'||args.method=='thirdParty/googleWebLogin'||args.method=='query/insuranceFee'){if(typeof ret.data!='string'){ret.data=JSON.stringify(ret.data);}
def.resolve(ret);return;}
if(ret.code==2000){if(typeof ret.data!='string'){ret.data=JSON.stringify(ret.data);}
def.resolve(ret.data);return;}
if(ret.code=='20000'||ret.code=='20002'||ret.code==10000){if(typeof ret!='string'){ret.data=JSON.stringify(ret.data);}
def.resolve(ret.data);}else{if(ret.code==70001){reLogin();}
def.reject(ret.code);}},error:function(err){toast.hide();def.reject(err);},});return def;},onerror:null,invoke:function(args,callback){var promise=this.ajax(args,'json');if(callback){promise.then(callback);}
return promise;},invokep:function(args,callback){var promise=this.ajax(args,'jsonp');if(callback){promise.then(callback);}
return promise;}};client.onerror=function(err){if(typeof parent.layer!='undefined'){layer.closeAll();parent.layer.msg(err,{icon:2});}else if(typeof layer!='undefined'){layer.closeAll();layer.msg(err,{icon:2});}else{alert(err);}};return client;}
var client=RpcService1('http://202.159.30.42:22241/jandt-businessapp-web/router');