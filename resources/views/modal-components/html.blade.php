<div class="container">
    <div class="row">
        <div id="app">
            <div class="survey-container" v-if="survey?.id">

                <!-- Button trigger modal -->
                <button v-if="showForm" id="modal_button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" {!! $button_style !!}>
                    Leave a review
                </button>

                <!-- Bootstrap Modal -->
                <div class="modal" id="myModal" v-if="showForm">
                    <div class="modal-dialog">
                        <div class="modal-content" id="demo-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 0; right: 0;" @click="onCloseModal"></button>

                            <form @submit.prevent="onSubmit" id="demo-form" v-if="showForm">

                                <div class="form-group d-flex flex-column">
                                    <label for="rating" class="text-center mb-2" id="form-label">
                                        <div v-if="!questions[rateAs_index].value">
                                            @{{ survey.popup_text }}
                                        </div>

                                        <div v-if="questions[rateAs_index].value == 5">
                                            @{{ survey.review_text }}
                                        </div>
                                    </label>

                                    <b-form-rating  
                                    v-bind:id="questions[rateAs_index].question_id" size="sm" variant="warning" color="#C2C2C2" v-model="questions[rateAs_index].value" :max="5" :inline="true" @change="saveRating"></b-form-rating>


                                </div>

                                <div v-if="(questions[rateAs_index].value < 5) && (questions[rateAs_index].value > 0)" style="
                                                                                                                                display: flex;
                                                                                                                                flex-direction: column;
                                                                                                                                padding: 0px;
                                                                                                                                gap: 20px;
                                                                                                                            ">
                                    <div class="form-group d-flex flex-column" v-for="(value, key) in questions">
                                        <div v-if="value.type === 'question'" id="form-question">
                                            <label id="label-massege" for="message">
                                                @{{ value.text }}
                                            </label>

                                            <textarea class="form-control" v-model="questions[key].value" v-bind:id="key" rows="3" autocomplete="on"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center" v-if="questions[rateAs_index]?.value > 0">
                                    <button type="submit" class="btn btn-primary" id="btn-submit">
                                        @{{ buttonText }}
                                    </button>
                                </div>
                            </form>
                            <div v-if="showFeedBeck" id="feedback">
                                @{{ FeedBeckMassege }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>