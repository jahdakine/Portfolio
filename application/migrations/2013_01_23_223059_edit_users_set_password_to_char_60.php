<?php

class Edit_Users_Set_Password_To_Char_60 {    

	public function up()
    {
		Schema::table('users', function($table) {
				$table->drop_column('password');
				$table->char('password', 60);
			});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
				$table->drop_column('password');
				$table->char('password', 30);
			});
    }

}