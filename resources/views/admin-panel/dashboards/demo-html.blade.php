<p class='m-0'>&lt;!DOCTYPE html&gt;</p>

<p class='m-0'>&lt;html&gt;</p>

<p class='m-0'>&lt;head&gt;</p>

<p class='m-0'>    &lt;meta charset=&quot;UTF-8&quot;&gt;</p>

<p class='m-0'>    &lt;title&gt;VueJS Bootstrap Form&lt;/title&gt;</p>

<p class='m-0'>    &lt;!-- Bootstrap CSS --&gt;</p>

<p class='m-0'>    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3&quot; crossorigin=&quot;anonymous&quot;&gt;</p>

<p class='m-0'>    &lt;!-- VueJS and Bootstrap JS --&gt;</p>

<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js&quot;&gt;&lt;/script&gt;</p>

<p class='m-0'>    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js&quot; integrity=&quot;sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;</p>

<p class='m-0'>    &lt;!-- BootstrapVue --&gt;</p>

<p class='m-0'>    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/bootstrap-vue/2.21.2/bootstrap-vue.min.js&quot; integrity=&quot;sha512-Z0dNfC81uEXC2iTTXtE0rM18I3ATkwn1m8Lxe0onw/uPEEkCmVZd+H8GTeYGkAZv50yvoSR5N3hoy/Do2hNSkw==&quot; crossorigin=&quot;anonymous&quot; referrerpolicy=&quot;no-referrer&quot;&gt;&lt;/script&gt;</p>

<p class='m-0'>    &lt;style&gt;</p>
<p class='m-0'>        .b-rating-icon {</p>
<p class='m-0'>            font-size: 43.3px;</p>
<p class='m-0'>            line-height: 41.35px;</p>
<p class='m-0'>            width: 39.95px;</p>
<p class='m-0'>            height: 38.15px;</p>
<p class='m-0'>        }</p>

<p class='m-0'>        #modal_button {</p>
<p class='m-0'>            position: fixed;</p>
<p class='m-0'>            right: 0;</p>
<p class='m-0'>            top: 50%;</p>
<p class='m-0'>            transform: translate(42px, -60px) rotate(270deg);</p>
<p class='m-0'>            background: #5083C1;</p>
<p class='m-0'>            border-radius: 10px 10px 0px 0px;</p>

<p class='m-0'>        }</p>

<p class='m-0'>        #btn-submit {</p>
<p class='m-0'>            border-color: white;</p>
<p class='m-0'>            background: #5083C1;</p>
<p class='m-0'>            border-radius: 4px;</p>
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
<p class='m-0'>            min-width: 564px;</p>
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

<p class='m-0'>        #form-question {</p>
<p class='m-0'>            display: flex;</p>
<p class='m-0'>            flex-direction: column;</p>
<p class='m-0'>            padding: 0px;</p>
<p class='m-0'>            gap: 15px;</p>
<p class='m-0'>            height: 144px;</p>
<p class='m-0'>        }</p>

<p class='m-0'>        #label-massege {</p>
<p class='m-0'>            text-align: left;</p>
<p class='m-0'>            font-family: &#039;Open Sans&#039;;</p>
<p class='m-0'>            font-style: normal;</p>
<p class='m-0'>            font-weight: 700;</p>
<p class='m-0'>            font-size: 18px;</p>
<p class='m-0'>            line-height: 24px;</p>
<p class='m-0'>            color: #0E2238;</p>
<p class='m-0'>            flex: none;</p>
<p class='m-0'>            order: 0;</p>
<p class='m-0'>            flex-grow: 0;</p>
<p class='m-0'>        }</p>

<p class='m-0'>        #form-textarea {</p>
<p class='m-0'>            box-sizing: border-box;</p>
<p class='m-0'>            background: #FFFFFF;</p>
<p class='m-0'>            border: 1px solid #5083C1;</p>
<p class='m-0'>            border-radius: 10px;</p>
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
<p class='m-0'>                    &lt;button id=&quot;modal_button&quot; type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#myModal&quot;&gt;</p>
<p class='m-0'>                        Leave a review</p>
<p class='m-0'>                    &lt;/button&gt;</p>

<p class='m-0'>                    &lt;!-- Bootstrap Modal --&gt;</p>
<p class='m-0'>                    &lt;div class=&quot;modal&quot; id=&quot;myModal&quot;&gt;</p>
<p class='m-0'>                        &lt;div class=&quot;modal-dialog&quot;&gt;</p>
<p class='m-0'>                            &lt;div class=&quot;modal-content&quot; id=&quot;demo-content&quot;&gt;</p>
<p class='m-0'>                                &lt;form @submit.prevent=&quot;onSubmit&quot;&gt;</p>
<p class='m-0'>                                    &lt;div v-for=&quot;(value, key) in questions&quot;&gt;</p>
<p class='m-0'>                                        &lt;div v-if=&quot;(value.text === &#039;Rate Us&#039;) &amp;&amp; (value.type === &#039;rating&#039;)&quot; v-bind=&quot;rateAs_index = key&quot;&gt;</p>
<p class='m-0'>                                            &lt;div class=&quot;form-group d-flex flex-column&quot;&gt;</p>
<p class='m-0'>                                                &lt;label for=&quot;rating&quot; class=&quot;text-center mb-2&quot; id=&quot;form-label&quot;&gt;</p>
<p class='m-0'>                                                    &lt;div v-if=&quot;!questions[key].value&quot;&gt;</p>
<p class='m-0'>                                                        @{{ value.text }}</p>
<p class='m-0'>                                                    &lt;/div&gt;</p>
<p class='m-0'>                                                &lt;/label&gt;</p>

<p class='m-0'>                                                &lt;b-form-rating v-bind:id=&quot;value.question_id&quot; size=&quot;sm&quot; variant=&quot;warning&quot; color=&quot;#C2C2C2&quot; no-border v-model=&quot;questions[key].value&quot; :max=&quot;5&quot; :inline=&quot;true&quot;&gt;</p>
<p class='m-0'>                                                &lt;/b-form-rating&gt;</p>
<p class='m-0'>                                            &lt;/div&gt;</p>
<p class='m-0'>                                        &lt;/div&gt;</p>

<p class='m-0'>                                        &lt;div v-else&gt;</p>
<p class='m-0'>                                            &lt;div v-if=&quot;(questions[rateAs_index].value &lt; 5) &amp;&amp; (questions[rateAs_index].value &gt; 0)&quot;&gt;</p>
<p class='m-0'>                                                &lt;div class=&quot;form-group d-flex flex-column&quot; v-if=&quot;(value.type === &#039;rating&#039;)&quot;&gt;</p>
<p class='m-0'>                                                    &lt;label for=&quot;rating&quot; class=&quot;mb-2&quot;&gt;</p>
<p class='m-0'>                                                        @{{ value.text }}</p>
<p class='m-0'>                                                    &lt;/label&gt;</p>
<p class='m-0'>                                                    &lt;b-form-rating v-bind:id=&quot; value.question_id&quot; size=&quot;sm&quot; color=&quot;#C2C2C2&quot; variant=&quot;warning&quot; no-border v-model=&quot;questions[key].value&quot; :max=&quot;5&quot; :inline=&quot;true&quot;&gt;&lt;/b-form-rating&gt;</p>
<p class='m-0'>                                                &lt;/div&gt;</p>

<p class='m-0'>                                                &lt;div class=&quot;form-group d-flex flex-column&quot; v-if=&quot;value.type === &#039;question&#039;&quot; id=&quot;form-question&quot;&gt;</p>
<p class='m-0'>                                                    &lt;label id=&quot;label-massege&quot; for=&quot;message&quot; class=&quot;mb-2&quot;&gt;</p>
<p class='m-0'>                                                        @{{ value.text }}</p>
<p class='m-0'>                                                    &lt;/label&gt;</p>

<p class='m-0'>                                                    &lt;textarea class=&quot;form-control&quot; v-model=&quot;questions[key].value&quot; id=&quot;message&quot; rows=&quot;3&quot; id=&quot;form-textarea&quot;&gt;&lt;/textarea&gt;</p>
<p class='m-0'>                                                &lt;/div&gt;</p>
<p class='m-0'>                                            &lt;/div&gt;</p>
<p class='m-0'>                                        &lt;/div&gt;</p>
<p class='m-0'>                                    &lt;/div&gt;</p>

<p class='m-0'>                                    &lt;div class=&quot;form-group text-center&quot; v-if=&quot;questions[rateAs_index]?.value &gt; 0&quot; style=&quot;padding: 45px;&quot;&gt;</p>
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
<p class='m-0'>                                // console.log(ratingStars);</p>

<p class='m-0'>                                ratingStars.forEach((star, index) =&gt; {</p>

<p class='m-0'>                                    if (index &lt; ratingValue) {</p>
<p class='m-0'>                                        star.innerHTML = &#039;&lt;svg focusable=&quot;false&quot;  class=&quot;bi-star-fill b-icon bi&quot; role=&quot;img&quot; aria-label=&quot;star fill&quot; width=&quot;39.95&quot; height=&quot;38.15&quot; viewBox=&quot;0 0 40 39&quot; fill=&quot;currentColor&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;&lt;path d=&quot;M19.9992 31.9622L10.3172 37.7947C9.88948 38.0669 9.44233 38.1835 8.97573 38.1446C8.50912 38.1057 8.10085 37.9502 7.7509 37.678C7.40095 37.4058 7.12876 37.0652 6.93435 36.6562C6.73993 36.2471 6.70105 35.7906 6.8177 35.2867L9.384 24.2632L0.810211 16.856C0.421377 16.506 0.178744 16.1071 0.0823137 15.6591C-0.0141172 15.2112 0.0146564 14.7741 0.168635 14.348C0.324168 13.9203 0.557469 13.5703 0.868536 13.2981C1.1796 13.0259 1.60732 12.851 2.15169 12.7732L13.4668 11.7817L17.8411 1.3998C18.0356 0.933203 18.3373 0.583251 18.7463 0.349951C19.1554 0.11665 19.573 0 19.9992 0C20.4269 0 20.8445 0.11665 21.252 0.349951C21.6595 0.583251 21.9612 0.933203 22.1572 1.3998L26.5316 11.7817L37.8466 12.7732C38.391 12.851 38.8187 13.0259 39.1298 13.2981C39.4409 13.5703 39.6742 13.9203 39.8297 14.348C39.9852 14.7757 40.0148 15.2135 39.9184 15.6615C39.8219 16.1094 39.5785 16.5076 39.1881 16.856L30.6143 24.2632L33.1806 35.2867C33.2973 35.7922 33.2584 36.2494 33.064 36.6585C32.8696 37.0676 32.5974 37.4074 32.2474 37.678C31.8975 37.9502 31.4892 38.1057 31.0226 38.1446C30.556 38.1835 30.1089 38.0669 29.6811 37.7947L19.9992 31.9622Z&quot; fill=&quot;url(#paint0_linear_102_3018)&quot;/&gt;&lt;defs&gt;&lt;linearGradient id=&quot;paint0_linear_102_3018&quot; x1=&quot;0.0774741&quot; y1=&quot;6.15552&quot; x2=&quot;37.9489&quot; y2=&quot;43.9589&quot; gradientUnits=&quot;userSpaceOnUse&quot;&gt;&lt;stop stop-color=&quot;#FFDE31&quot;/&gt;&lt;stop offset=&quot;1&quot; stop-color=&quot;#FFB21E&quot;/&gt;&lt;stop offset=&quot;1&quot; stop-color=&quot;#FF6F1E&quot;/&gt;&lt;/linearGradient&gt;&lt;/defs&gt;&lt;/svg&gt;&#039;;</p>
<p class='m-0'>                                        // star.style.color = &#039;rgba(255, 222, 49, 1)&#039;;</p>
<p class='m-0'>                                    } else {</p>

<p class='m-0'>                                        console.log(star.innerHTML);</p>
<p class='m-0'>                                        star.innerHTML = &#039;&lt;svg viewBox=&quot;0 0 16 16&quot; width=&quot;39.95&quot; height=&quot;38.15&quot; focusable=&quot;false&quot; role=&quot;img&quot; aria-label=&quot;star&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;currentColor&quot; class=&quot;bi-star b-icon bi&quot;&gt;&lt;g&gt;&lt;path d=&quot;M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z&quot;&gt;&lt;/path&gt;&lt;/g&gt;&lt;/svg&gt;&#039;;</p>
<p class='m-0'>                                        star.style.background = &#039;&#039;;</p>
<p class='m-0'>                                    }</p>
<p class='m-0'>                                });</p>

<p class='m-0'>                            }</p>
<p class='m-0'>                        });</p>
<p class='m-0'>                    },</p>
<p class='m-0'>                    deep: true</p>
<p class='m-0'>                }</p>
<p class='m-0'>            },</p>

<p class='m-0'>            methods: {</p>
<p class='m-0'>                onSubmit: function() {</p>
<p class='m-0'>                    let formData = new FormData();</p>
<p class='m-0'>                    formData.append(&#039;answers&#039;, this.questions);</p>
<p class='m-0'>                    axios.post(BASE_URL + +this.survey.id + &#039;/responses&#039;, {</p>
<p class='m-0'>                            answers: this.questions.filter(question =&gt; question.value !== null)</p>
<p class='m-0'>                        })</p>
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