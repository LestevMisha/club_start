var a;const c=(a=document.querySelector("meta[name='csrf-token']"))==null?void 0:a.content;window.postRequest=async function(o,t,r={},n=null){try{n&&(n.style.display="block");const e=await fetch(o,{method:"POST",headers:{"X-CSRF-TOKEN":c,"Content-Type":t},body:new URLSearchParams(r)});if(!e.ok)throw new Error(e.status);return await e.json()}catch(e){throw console.error(e),e}finally{n&&(n.style.display="none")}};window.reCAPTCHA=function(o,t,r=null){return new Promise((n,e)=>{grecaptcha.ready(function(){grecaptcha.execute(o,{action:"submit"}).then(async s=>{const i=`${window.location.origin}/post/recaptacha/verify`,w={token:s},u=await postRequest(i,t,w,r);n(u)}).catch(s=>e(s))})})};window.getRequest=async function(o){try{let t=await fetch(o,{method:"GET",headers:{"X-CSRF-TOKEN":c}});if(!t.ok)throw new Error(t.status);return await t.json()}catch(t){alert(t)}};