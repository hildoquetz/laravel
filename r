+--------+-----------+--------------------------------------------+---------------------------+------------------------------------------------+------------+
| Domain | Method    | URI                                        | Name                      | Action                                         | Middleware |
+--------+-----------+--------------------------------------------+---------------------------+------------------------------------------------+------------+
|        | POST      | questions/{question}/answers               | questions.answers.store   | App\Http\Controllers\AnswersController@store   | web        |
|        | PUT|PATCH | questions/{question}/answers/{answer}      | questions.answers.update  | App\Http\Controllers\AnswersController@update  | web        |
|        | DELETE    | questions/{question}/answers/{answer}      | questions.answers.destroy | App\Http\Controllers\AnswersController@destroy | web        |
|        | GET|HEAD  | questions/{question}/answers/{answer}/edit | questions.answers.edit    | App\Http\Controllers\AnswersController@edit    | web        |
+--------+-----------+--------------------------------------------+---------------------------+------------------------------------------------+------------+
