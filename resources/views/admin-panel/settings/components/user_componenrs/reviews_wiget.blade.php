<div class="feedback-widget" style="display:none;">
    <!-- Тут може бути ваш контент для відгуків -->
    <h3>{{ __('User Reviews') }}</h3>
    
    @if($reviews->count() != 0 )
    <div class="table-responsive">
                <table class="table user-table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="w-60px pe-0">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                </div>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="review">
                                    Review
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                    Date
                                </a>
                            </th>
                            <th class="text-center">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="comment">
                                    All Questions
                                </a>
                            </th>
                            <!--
                            <th class="w-150px text-center">
                                <a href="javascript: void(0);" class="text-muted">
                                    Edit
                                </a>
                            </th>
                            -->
                        </tr>
                    </thead>

                    <tbody class="list">
                        @foreach($reviews as $answer)
                        <tr>
                            <td class="pe-0">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td class="review">
                                <span class="stars-reviews">
                                    @for($i = 0; $i < $answer["rate_as"] ; $i++) <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                        @endfor
                                </span>
                            </td>
                            <td class="date">{{ $answer['date'] }}</td>
                            <td class="comment text-center">
                                @if(count($answer["all_questions"]) > 0)
                                @foreach($answer["all_questions"] as $question)

                                <strong>{{ $question["question"] }}:</strong> {{ $question["answer"] }}
                                <br>
                                @endforeach
                                @endif
                            </td>
                            <!--
                            <td class="edit text-center">
                                <a class="view" href="javascript: void(0);">
                                    <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                </a>
                                <a class="edit mx-5" href="javascript: void(0);">
                                    <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                </a>
                                <a class="delete" href="javascript: void(0);">
                                    <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                </a>
                            </td>
                            -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- / .table-responsive -->
    @else
    <p>You haven`t Reviews!</p>
    @endif
    <!--
    <p>Дуже корисний віджет! Рекомендую!</p>
    <p>Ваш сайт - неймовірний! Дякую за допомогу!</p>
    -->
</div>