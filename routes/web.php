<?php

Route::get('/', 'CourseController@courses');

Route::get('/cursos', 'CourseController@courses');

Route::get('cursos/detalhes/{id}', 'CourseController@details');

Route::get('/pesquisar/{search}', 'CourseController@search');


