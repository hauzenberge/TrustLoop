<p class='m-0'>&lt;!DOCTYPE html&gt;</p>

<p class='m-0'>&lt;html&gt;</p>

<p class='m-0'>&lt;head&gt;</p>

<p class='m-0'>    &lt;meta charset=&quot;UTF-8&quot;&gt;</p>

<p class='m-0'>    &lt;title&gt;VueJS Bootstrap Form&lt;/title&gt;</p>

<p class='m-0'>    &lt;!-- Bootstrap CSS --&gt;</p>

<p class='m-0'>    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;</p>
<p class='m-0'>        integrity=&quot;sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3&quot; crossorigin=&quot;anonymous&quot;&gt;</p>

<p class='m-0'>    &lt;!-- VueJS and Bootstrap JS --&gt;</p>

<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js&quot;&gt;&lt;/script&gt;</p>

<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js&quot;</p>
<p class='m-0'>        integrity=&quot;sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p&quot;</p>
<p class='m-0'>        crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;</p>

<p class='m-0'>    &lt;!-- BootstrapVue --&gt;</p>

<p class='m-0'>    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/bootstrap-vue/2.21.2/bootstrap-vue.min.js&quot;</p>
<p class='m-0'>        integrity=&quot;sha512-Z0dNfC81uEXC2iTTXtE0rM18I3ATkwn1m8Lxe0onw/uPEEkCmVZd+H8GTeYGkAZv50yvoSR5N3hoy/Do2hNSkw==&quot;</p>
<p class='m-0'>        crossorigin=&quot;anonymous&quot; referrerpolicy=&quot;no-referrer&quot;&gt;&lt;/script&gt;</p>

<p class='m-0'>    &lt;style&gt;</p>
<p class='m-0'>        .b-rating-icon {</p>
<p class='m-0'>            font-size: 43.3px;</p>
<p class='m-0'>            line-height: 41.35px;</p>
<p class='m-0'>        }</p>


<p class='m-0'>        #demo-form {</p>
<p class='m-0'>            display: flex;</p>
<p class='m-0'>            flex-direction: column;</p>
<p class='m-0'>            align-items: center;</p>
<p class='m-0'>        }</p>

<p class='m-0'>        #demo-content {</p>
<p class='m-0'>            display: flex;</p>
<p class='m-0'>            top: 123px;</p>
<p class='m-0'>            flex-direction: column;</p>
<p class='m-0'>            align-items: center;</p>
<p class='m-0'>            width: 618px;</p>
<p class='m-0'>            min-height: 373px;</p>
<p class='m-0'>            border-radius: 10px;</p>
<p class='m-0'>            justify-content: center;</p>
<p class='m-0'>            align-items: center;</p>
<p class='m-0'>        }</p>

<p class='m-0'>        #btn-dubmit {</p>
<p class='m-0'>            border-radius: 4px;</p>
<p class='m-0'>            width: 171px;</p>
<p class='m-0'>            height: 37px;</p>
<p class='m-0'>        }</p>

<p class='m-0'>        #form-label {</p>
<p class='m-0'>            font-style: normal;</p>
<p class='m-0'>            font-weight: 700;</p>
<p class='m-0'>            font-size: 36px;</p>
<p class='m-0'>            line-height: 49px;</p>
<p class='m-0'>        }</p>

<p class='m-0'>        #app {</p>
<p class='m-0'>            text-align: center;</p>
<p class='m-0'>        }</p>
<p class='m-0'>    &lt;/style&gt;</p>
<p class='m-0'>&lt;/head&gt;</p>

<p class='m-0'>&lt;body&gt;</p>

<p class='m-0'>    &lt;div class=&quot;container&quot;&gt;</p>
<p class='m-0'>        &lt;div class=&quot;row&quot;&gt;</p>
<p class='m-0'>            &lt;div id=&quot;app&quot;&gt;</p>
<p class='m-0'>                &lt;!-- Centered text --&gt;</p>
<p class='m-0'>                &lt;div class=&quot;justify-content-center mb-4&quot;&gt;</p>
<p class='m-0'>                    &lt;h2&gt;What is Lorem Ipsum?&lt;/h2&gt;</p>
<p class='m-0'>                    &lt;br&gt;</p>
<p class='m-0'>                    &lt;p&gt;</p>
<p class='m-0'>                        &lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry.</p>
<p class='m-0'>                        Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown</p>
<p class='m-0'>                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not</p>
<p class='m-0'>                        only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
<p class='m-0'>                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem</p>
<p class='m-0'>                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker</p>
<p class='m-0'>                        including versions of Lorem Ipsum.</p>
<p class='m-0'>                    &lt;/p&gt;</p>
<p class='m-0'>                &lt;/div&gt;</p>
<p class='m-0'>                &lt;div class=&quot;survey-container&quot; v-if=&quot;survey?.id&quot;&gt;</p>
<p class='m-0'>                    &lt;!-- Button trigger modal --&gt;</p>
<p class='m-0'>                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#myModal&quot;&gt;</p>
<p class='m-0'>                        Leave a review</p>
<p class='m-0'>                    &lt;/button&gt;</p>

<p class='m-0'>                    &lt;!-- Bootstrap Modal --&gt;</p>
<p class='m-0'>                    &lt;div class=&quot;modal&quot; id=&quot;myModal&quot;&gt;</p>
<p class='m-0'>                        &lt;div class=&quot;modal-dialog&quot;&gt;</p>
<p class='m-0'>                            &lt;div class=&quot;modal-content&quot; id=&quot;demo-content&quot;&gt;</p>
<p class='m-0'>                                &lt;form @submit.prevent=&quot;onSubmit&quot;&gt;</p>
<p class='m-0'>                                    &lt;div v-for=&quot;(value, key) in questions&quot;&gt;</p>
<p class='m-0'>                                        &lt;div v-if=&quot;(value.text === &#039;Rate Us&#039;) &amp;&amp; (value.type === &#039;rating&#039;)&quot;</p>
<p class='m-0'>                                            v-bind=&quot;rateAs_index = key&quot;&gt;</p>
<p class='m-0'>                                            &lt;div class=&quot;form-group d-flex flex-column&quot;&gt;</p>
<p class='m-0'>                                                &lt;label for=&quot;rating&quot; class=&quot;text-center mb-2&quot; id=&quot;form-label&quot;&gt;</p>
<p class='m-0'>                                                    @{{ value.text }} </p>
<p class='m-0'>                                                &lt;/label&gt;</p>

<p class='m-0'>                                                &lt;b-form-rating v-bind:id=&quot;value.question_id&quot; size=&quot;sm&quot; variant=&quot;warning&quot; color=&quot;#C2C2C2&quot;</p>
<p class='m-0'>                                                    no-border v-model=&quot;questions[key].value&quot; :max=&quot;5&quot; :inline=&quot;true&quot;&gt;</p>
<p class='m-0'>                                                &lt;/b-form-rating&gt;</p>
<p class='m-0'>                                            &lt;/div&gt;</p>
<p class='m-0'>                                        &lt;/div&gt;</p>

<p class='m-0'>                                        &lt;div v-else&gt;</p>
<p class='m-0'>                                            &lt;div</p>
<p class='m-0'>                                                v-if=&quot;(questions[rateAs_index].value &lt; 5) &amp;&amp; (questions[rateAs_index].value &gt; 0)&quot;&gt;</p>
<p class='m-0'>                                                &lt;div class=&quot;form-group d-flex flex-column&quot;</p>
<p class='m-0'>                                                    v-if=&quot;(value.type === &#039;rating&#039;)&quot;&gt;</p>
<p class='m-0'>                                                    &lt;label for=&quot;rating&quot; class=&quot;text-center mb-2&quot;&gt;</p>
<p class='m-0'>                                                        @{{ value.text }}</p>
<p class='m-0'>                                                    &lt;/label&gt;</p>
<p class='m-0'>                                                    &lt;b-form-rating v-bind:id=&quot; value.question_id&quot; size=&quot;sm&quot; color=&quot;#C2C2C2&quot; variant=&quot;warning&quot; no-border</p>
<p class='m-0'>                                                        v-model=&quot;questions[key].value&quot; :max=&quot;5&quot;</p>
<p class='m-0'>                                                        :inline=&quot;true&quot;&gt;&lt;/b-form-rating&gt;</p>
<p class='m-0'>                                                &lt;/div&gt;</p>

<p class='m-0'>                                                &lt;div class=&quot;form-group d-flex flex-column&quot;</p>
<p class='m-0'>                                                    v-if=&quot;value.type === &#039;question&#039;&quot;&gt;</p>
<p class='m-0'>                                                    &lt;label for=&quot;message&quot; class=&quot;text-center mb-2&quot;&gt;</p>
<p class='m-0'>                                                        @{{ value.text }}</p>
<p class='m-0'>                                                    &lt;/label&gt;</p>

<p class='m-0'>                                                    &lt;textarea class=&quot;form-control&quot; v-model=&quot;questions[key].value&quot;</p>
<p class='m-0'>                                                        id=&quot;message&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;</p>
<p class='m-0'>                                                &lt;/div&gt;</p>
<p class='m-0'>                                            &lt;/div&gt;</p>
<p class='m-0'>                                        &lt;/div&gt;</p>
<p class='m-0'>                                    &lt;/div&gt;</p>

<p class='m-0'>                                    &lt;div class=&quot;form-group text-center&quot; v-if=&quot;questions[rateAs_index]?.value &gt; 0&quot;</p>
<p class='m-0'>                                        style=&quot;padding: 45px;&quot;&gt;</p>
<p class='m-0'>                                        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot; id=&quot;btn-submit&quot;&gt;</p>
<p class='m-0'>                                            @{{ buttonText }}</p>
<p class='m-0'>                                        &lt;/button&gt;</p>
<p class='m-0'>                                    &lt;/div&gt;</p>
<p class='m-0'>                                &lt;/form&gt;</p>
<p class='m-0'>                            &lt;/div&gt;</p>
<p class='m-0'>                        &lt;/div&gt;</p>
<p class='m-0'>                    &lt;/div&gt;</p>
<p class='m-0'>                &lt;/div&gt;</p>
<p class='m-0'>            &lt;/div&gt;</p>
<p class='m-0'>        &lt;/div&gt;</p>
<p class='m-0'>    &lt;/div&gt;</p>

<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js&quot;&gt;&lt;/script&gt;</p>
<p class='m-0'>    &lt;script&gt;</p>
<p class='m-0'>        <p class='m-0'> const BASE_URL = &#039;{{ url('/api/surveys/') }}&#039; + &#039;/&#039;;</p>
<p class='m-0'>        var app = new Vue({</p>
<p class='m-0'>            el: &#039;#app&#039;,</p>
<p class='m-0'>            data: {</p>
<p class='m-0'>                rating: null,</p>
<p class='m-0'>                comment: &#039;&#039;,</p>
<p class='m-0'>                survey: {},</p>
<p class='m-0'>                questions: {},</p>
<p class='m-0'>                buttonText: &#039;&#039;,</p>
<p class='m-0'>                rateAs_index: null</p>
<p class='m-0'>            },</p>
<p class='m-0'>            watch: {</p>
<p class='m-0'>                questions: {</p>
<p class='m-0'>                    handler(newQuestions) {</p>
<p class='m-0'>                        newQuestions.forEach(question =&gt; {</p>
<p class='m-0'>                            if (question.type === &#039;rating&#039;) {</p>
<p class='m-0'>                                const ratingValue = question.value;</p>
<p class='m-0'>                                const ratingComponent = document?.getElementById(question.question_id);</p>
<p class='m-0'>                                const ratingStars = ratingComponent?.querySelectorAll(&#039;.b-rating-icon&#039;);</p>
<p class='m-0'>                               // console.log(ratingStars);</p>

<p class='m-0'>                                ratingStars.forEach((star, index) =&gt; {</p>
<p class='m-0'>                                    if (index &lt; ratingValue) {</p>
<p class='m-0'>                                        star.style.color = &#039;rgba(255, 222, 49, 1)&#039;;</p>
<p class='m-0'>                                    } else {</p>
<p class='m-0'>                                        star.style.background = &#039;&#039;;</p>
<p class='m-0'>                                    }</p>
<p class='m-0'>                                });</p>

<p class='m-0'>                            }</p>
<p class='m-0'>                        });</p>
<p class='m-0'>                    },</p>
<p class='m-0'>                    deep: true</p>
<p class='m-0'>                }</p>
<p class='m-0'>            }</p>
<p class='m-0'>            ,</p>

<p class='m-0'>            methods: {</p>
<p class='m-0'>                onSubmit: function () {</p>
<p class='m-0'>                    let formData = new FormData();</p>
<p class='m-0'>                    formData.append(&#039;answers&#039;, this.questions);</p>
<p class='m-0'>                    axios.post(BASE_URL + +this.survey.id + &#039;/responses&#039;, {</p>
<p class='m-0'>                        answers: this.questions.filter(question =&gt; question.value !== null)</p>
<p class='m-0'>                    })</p>
<p class='m-0'>                        .then(response =&gt; {</p>
<p class='m-0'>                            if (response.data.redirect_url != null) {</p>
<p class='m-0'>                                window.location.assign(response.data.redirect_url);</p>
<p class='m-0'>                            }</p>
<p class='m-0'>                        })</p>
<p class='m-0'>                        .catch(error =&gt; {</p>
<p class='m-0'>                            console.log(error)</p>
<p class='m-0'>                            // handle error</p>
<p class='m-0'>                        });</p>
<p class='m-0'>                },</p>
<p class='m-0'>            },</p>

<p class='m-0'>            mounted() {</p>
<p class='m-0'>                const vm = this;</p>
<p class='m-0'>                async function fetchData() {</p>
<p class='m-0'>                    try {</p>
<p class='m-0'>                        const response = await axios.get(BASE_URL + {{ Auth::user()->id }});</p>
<p class='m-0'>                        vm.survey = response.data.survey;</p>
<p class='m-0'>                        vm.buttonText = response.data.survey.review_button_text;</p>
<p class='m-0'>                        vm.questions = response.data.questions;</p>
<p class='m-0'>                        vm.rateAs_index = this.questions.findIndex(value =&gt; {</p>
<p class='m-0'>                            return (value.text === &#039;Rate Us&#039;) || (value.type === &#039;rating&#039;)</p>
<p class='m-0'>                        });</p>
<p class='m-0'>                    } catch (error) {</p>
<p class='m-0'>                        console.log(error);</p>
<p class='m-0'>                    }</p>
<p class='m-0'>                }</p>
<p class='m-0'>                fetchData();</p>
<p class='m-0'>            },</p>
<p class='m-0'>        });</p>
<p class='m-0'>    &lt;/script&gt;</p>
<p class='m-0'>&lt;/body&gt;</p>

<p class='m-0'>&lt;/html&gt;</p>