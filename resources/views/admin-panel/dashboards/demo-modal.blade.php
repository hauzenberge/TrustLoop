<p class='m-0'>    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;</p>
<p class='m-0'>        integrity=&quot;sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3&quot; crossorigin=&quot;anonymous&quot;&gt;</p>
<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js&quot;&gt;&lt;/script&gt;</p>
<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js&quot;</p>
<p class='m-0'>        integrity=&quot;sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p&quot;</p>
<p class='m-0'>        crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;</p>
<p class='m-0'>    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/bootstrap-vue/2.21.2/bootstrap-vue.min.js&quot;</p>
<p class='m-0'>        integrity=&quot;sha512-Z0dNfC81uEXC2iTTXtE0rM18I3ATkwn1m8Lxe0onw/uPEEkCmVZd+H8GTeYGkAZv50yvoSR5N3hoy/Do2hNSkw==&quot;</p>
<p class='m-0'>        crossorigin=&quot;anonymous&quot; referrerpolicy=&quot;no-referrer&quot;&gt;&lt;/script&gt;</p>
<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js&quot;&gt;&lt;/script&gt;</p>
<p class='m-0'>    &lt;!-- Додаємо посилання на CDN-версію jQuery --&gt;</p>
<p class='m-0'>    &lt;script src=&quot;https://code.jquery.com/jquery-3.6.0.min.js&quot;&gt;&lt;/script&gt;</p>
<p class='m-0'>    &lt;script&gt;</p>
<p class='m-0'>        $(document).ready(function () {</p>  
<p class='m-0'>            $.get(&#039;{{ url('/modal/' . Auth::user()->id) }}&#039;, function (data) {</p>
<p class='m-0'>                $(data).appendTo(&#039;body&#039;);</p>
<p class='m-0'>            });</p>
<p class='m-0'>        });</p>
<p class='m-0'>    &lt;/script&gt;</p>
