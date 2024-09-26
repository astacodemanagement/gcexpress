var tableConfig={elem:'#dbGrid',size:'sm',even:true,height:'full-125',limits:[10,20,50,100,200,500,1000,2000,5000,10000,20000,50000],limit:50,page:true};function getFormData(formObj){var data={};var formData=formObj.serializeArray();$.each(formData,function(){data[this.name]=this.value;});return data;}
function refreshTable(){$('.layui-laypage-btn').trigger('click');}
function setUserinfo(key,val,expires){val=JSON.stringify(val);if(typeof expires=='undefined'){$.cookie(key,val,{path:'/'});}else{$.cookie(key,val,{path:'/',expires:expires});}}
function getUserinfo(key){var val=$.cookie(key);if(val){return JSON.parse(val);}else{return null;}}
function isJsonString(str){try{if(typeof JSON.parse(str)=="object"){return true;}}catch(e){}
return false;}
function RpcService(baseUrl){var client={ajax:function(func,args,dataType){if(args.length==0)args=[{}];var _this=this;var def=$.Deferred();$.ajax({type:"POST",url:baseUrl,data:{f:func,p:JSON.stringify(args)},headers:{"token":localStorage.getItem('token')},success:function(ret){if(typeof ret=='string'){ret=JSON.parse(ret);}
if(ret.retid==0){if(_this.onerror){_this.onerror(ret.msg)}
def.reject(ret.msg);}else{def.resolve(ret.data);}},dataType:dataType});return def;},onerror:null,invoke:function(func,args,callback){var promise=this.ajax(func,args,'json');if(callback){promise.then(callback);}
return promise;},invokep:function(func,args,callback){var promise=this.ajax(func,args,'jsonp');if(callback){promise.then(callback);}
return promise;}};client.onerror=function(err){if(typeof parent.layer!='undefined'){layer.closeAll();layer.msg(err,{icon:5,offset:'5%'});}
else if(typeof layer!='undefined'){layer.closeAll();layer.msg(err,{icon:5,offset:'5%'});}else{alert(err);}};return client;}