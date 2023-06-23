<script>
    const BASE_URL = '<?php echo url('api/surveys') ?>' + '/';
    var app = new Vue({
        el: '#app',
        data: {
            showForm: true,
            showFeedBeck: false,
            FeedBeckMassege: '',
            rating: null,
            comment: '',
            survey: {},
            questions: {},
            buttonText: '',
            rateAs_index: null
        },
        watch: {
            questions: {
                handler(newQuestions) {
                    newQuestions?.forEach(question => {
                        if (question.type === 'rating') {
                            const ratingValue = question.value;
                            const ratingComponent = document?.getElementById(question.question_id);
                            const ratingStars = ratingComponent?.querySelectorAll('.b-rating-icon');
                            ratingStars?.forEach((star, index) => {
                                if (index < ratingValue) {
                                    star.innerHTML = '<svg focusable="false" class="bi-star-fill b-icon bi" role="img" aria-label="star fill" width="39.95" height="38.15" viewBox="0 0 40 39" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M19.9992 31.9622L10.3172 37.7947C9.88948 38.0669 9.44233 38.1835 8.97573 38.1446C8.50912 38.1057 8.10085 37.9502 7.7509 37.678C7.40095 37.4058 7.12876 37.0652 6.93435 36.6562C6.73993 36.2471 6.70105 35.7906 6.8177 35.2867L9.384 24.2632L0.810211 16.856C0.421377 16.506 0.178744 16.1071 0.0823137 15.6591C-0.0141172 15.2112 0.0146564 14.7741 0.168635 14.348C0.324168 13.9203 0.557469 13.5703 0.868536 13.2981C1.1796 13.0259 1.60732 12.851 2.15169 12.7732L13.4668 11.7817L17.8411 1.3998C18.0356 0.933203 18.3373 0.583251 18.7463 0.349951C19.1554 0.11665 19.573 0 19.9992 0C20.4269 0 20.8445 0.11665 21.252 0.349951C21.6595 0.583251 21.9612 0.933203 22.1572 1.3998L26.5316 11.7817L37.8466 12.7732C38.391 12.851 38.8187 13.0259 39.1298 13.2981C39.4409 13.5703 39.6742 13.9203 39.8297 14.348C39.9852 14.7757 40.0148 15.2135 39.9184 15.6615C39.8219 16.1094 39.5785 16.5076 39.1881 16.856L30.6143 24.2632L33.1806 35.2867C33.2973 35.7922 33.2584 36.2494 33.064 36.6585C32.8696 37.0676 32.5974 37.4074 32.2474 37.678C31.8975 37.9502 31.4892 38.1057 31.0226 38.1446C30.556 38.1835 30.1089 38.0669 29.6811 37.7947L19.9992 31.9622Z" fill="url(#paint0_linear_102_3018)"/><defs><linearGradient id="paint0_linear_102_3018" x1="0.0774741" y1="6.15552" x2="37.9489" y2="43.9589" gradientUnits="userSpaceOnUse"><stop stop-color="#FFDE31"/><stop offset="1" stop-color="#FFB21E"/><stop offset="1" stop-color="#FF6F1E"/></linearGradient></defs></svg>';
                                } else {
                                    star.innerHTML = '<svg viewBox="0 0 16 16" width="39.95" height="38.15" focusable="false" role="img" aria-label="star" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-star b-icon bi"><g><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path></g></svg>';
                                    star.style.background = '';
                                }
                            });

                        }
                    });
                    document.cookie = 'questions=' + JSON.stringify(newQuestions);
                },
                deep: true
            }
        },

        methods: {
            onSubmit: function() {
                let formData = new FormData();
                formData.append('answers', this.questions);
                axios.post(BASE_URL + +this.survey.id + '/responses', {
                        answers: this.questions.filter(question => question.value !== null)
                    })
                    .then(response => {
                        if ((this.questions[this.rateAs_index].value == 5) && (response.data.redirect_url != null)) {
                            window.location.assign(response.data.redirect_url);
                        } else {
                            this.showForm = false;
                            this.showFeedBeck = true;
                            this.FeedBeckMassege = response.data.text;
                        }
                    })
                    .catch(error => {
                        console.log(error)
                        // handle error
                    });
            },
        },

        mounted() {
            const vm = this;
            async function fetchData() {
                try {
                    const response = await axios.get(BASE_URL + '<?php echo $user_id ?>');
                    vm.survey = response.data.survey;
                    vm.buttonText = response.data.survey.review_button_text;
                    vm.questions = response.data.questions;
                    vm.rateAs_index = vm.questions.findIndex(value => {
                        return (value.text === 'Rate Us') || (value.type === 'rating')
                    });
                } catch (error) {
                    console.log(error);
                }
            }
            fetchData();
        },
    });
</script>


{!! $script !!}