<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>VueJS Bootstrap Form</title>

    <!-- Підключення Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Підключення VueJS та Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Підключення BootstrapVue -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-vue/2.21.2/bootstrap-vue.min.js" integrity="sha512-Z0dNfC81uEXC2iTTXtE0rM18I3ATkwn1m8Lxe0onw/uPEEkCmVZd+H8GTeYGkAZv50yvoSR5N3hoy/Do2hNSkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .b-rating-icon {

            font-size: 43.3px;

            line-height: 41.35px;

        }

        #demo-form {

            display: flex;

            flex-direction: column;

            align-items: center;

        }

        #demo-content {

            display: flex;

            top: 123px;

            flex-direction: column;

            align-items: center;

            width: 618px;

            min-height: 373px;

            border-radius: 10px;

            justify-content: center;

            align-items: center;

        }

        #btn-dubmit {

            border-radius: 4px;

            width: 171px;

            height: 37px;

        }

        #form-label {

            font-style: normal;

            font-weight: 700;

            font-size: 36px;

            line-height: 49px;

        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row">

            <div id="app" style="

text-align: center;

">

                <!-- Centered text -->

                <div class="justify-content-center mb-4">

                    <h2>What is Lorem Ipsum?</h2>

                    <br>

                    <p>

                        <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.

                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown

                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not

                        only five centuries, but also the leap into electronic typesetting, remaining essentially

                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem

                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker

                        including versions of Lorem Ipsum.

                    </p>

                    <p>
                        @{{ survey }}
                    </p>

                    <p>
                        @{{ questions }}
                    </p>

                </div>
                <div class="survey-container" v-if="survey?.id">
                    <!-- Button trigger modal -->

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">

                        Leave a review

                    </button>

                    <!-- Bootstrap Modal -->

                    <div class="modal" id="myModal">

                        <div class="modal-dialog">

                            <div class="modal-content" id="demo-content">

                                <form @submit.prevent="onSubmit">

                                    <div v-for="(value, key) in questions">

                                        <div v-if="(value.text === 'Rate Us') || (value.type === 'rating')" v-bind="rateAs_index = key">

                                            <div class="form-group d-flex flex-column">

                                                <label for="rating" class="text-center mb-2" id="form-label">

                                                    @{{ value.text }}

                                                </label>

                                                <b-form-rating id="rating" size="sm" variant="warning" no-border v-model="questions[key].value" :max="5" :inline="true"></b-form-rating>

                                            </div>

                                        </div>

                                        <div v-else>

                                            <div v-if="(questions[rateAs_index].value < 5) && (questions[rateAs_index].value > 0)">

                                                <div class="form-group d-flex flex-column" v-if="(value.type === 'rating')">

                                                    <label for="rating" class="text-center mb-2">

                                                        @{{ value.text }}

                                                    </label>

                                                    <b-form-rating id="rating" size="sm" variant="warning" no-border v-model="questions[key].value" :max="5" :inline="true"></b-form-rating>

                                                </div>

                                                <div class="form-group d-flex flex-column" v-if="value.type === 'question'">

                                                    <label for="message" class="text-center mb-2">@{{ value.text }}</label>

                                                    <textarea class="form-control" v-model="questions[key].value" id="message" rows="3"></textarea>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group text-center" v-if="questions[rateAs_index]?.value > 0" style="padding: 45px;">

                                        <button type="submit" class="btn btn-primary" id="btn-submit">

                                            @{{ buttonText }}

                                        </button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        var app = new Vue({

            el: '#app',

            data: {

                base_url: 'https://trustloop.dev.wprollers.com/api/surveys' + '/',

                rating: null,

                comment: '',

                survey: {},

                questions: {},

                buttonText: '',

                rateAs_index: null

            },

            methods: {

                onSubmit: function() {
                    let formData = new FormData();
                    formData.append('answers', this.questions);
                    axios.post(this.base_url + this.survey.id + '/responses', {
                            answers: this.questions.filter(question => question.value !== null)
                        })
                        .then(response => {
                            console.log(response.data.redirect_url);
                            if (response.data.redirect_url != null) {
                                window.location.assign(response.data.redirect_url);
                            }
                        })

                        .catch(error => {

                            // handle error

                        });

                },

            },

            mounted() {
                const vm = this;
                async function fetchData() {
                    try {
                        const response = await axios.get('https://trustloop.dev.wprollers.com/api/surveys/102');
                        console.log(response.data);
                        vm.survey = response.data.survey;
                        vm.buttonText = response.data.review_button_text;
                        vm.questions = response.data.questions;
                        vm.rateAs_index = this.questions.findIndex(value => {
                            return (value.text === 'Rate Us') || (value.type === 'rating')
                        });
                    } catch (error) {
                        console.log(error);
                    }
                }

                fetchData();

                console.log(this.survey.id);


            },

        });
    </script>

</body>

</html>