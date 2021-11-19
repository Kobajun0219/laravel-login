<?php

namespace App\Http\Compornents;

use App\Models\User;

class Serch
{
  public static function serch($keyword_name, $keyword_age, $keyword_sex, $keyword_age_condition)
  {
    $query = User::query();

    if (!empty($keyword_name) && empty($keyword_age) && empty($keyword_age_condition)) {
      $users = $query->where('name', 'like', '%' . $keyword_name . '%')->get();
      $message = "「" . $keyword_name . "」を含む名前の検索が完了しました。";
    } elseif (empty($keyword_name) && !empty($keyword_age) && $keyword_age_condition == 0) {
      $message = "年齢の条件を選択してください";
    } elseif (empty($keyword_name) && !empty($keyword_age) && $keyword_age_condition == 1) {
      $users = $query->where('age', '>=', $keyword_age)->get();
      $message = $keyword_age . "歳以上の検索が完了しました";
    } elseif (empty($keyword_name) && !empty($keyword_age) && $keyword_age_condition == 2) {
      $users = $query->where('age', '<=', $keyword_age)->get();
      $message = $keyword_age . "歳以下の検索が完了しました";
    } elseif (!empty($keyword_name) && !empty($keyword_age) && $keyword_age_condition == 1) {
      $users = $query->where('name', 'like', '%' . $keyword_name . '%')->where('age', '>=', $keyword_age)->get();
      $message = "「" . $keyword_name . "」を含む名前と" . $keyword_age . "歳以上の検索が完了しました";
    } elseif (!empty($keyword_name) && !empty($keyword_age) && $keyword_age_condition == 2) {
      $users = $query->where('name', 'like', '%' . $keyword_name . '%')->where('age', '<=', $keyword_age)->get();
      $message = "「" . $keyword_name . "」を含む名前と" . $keyword_age . "歳以下の検索が完了しました";
    } elseif (empty($keyword_name) && empty($keyword_age) && $keyword_sex == 1) {
      $users = $query->where('sex', '男')->get();
      $message = "男性の検索が完了しました";
    } elseif (empty($keyword_name) && empty($keyword_age) && $keyword_sex == 2) {
      $users = $query->where('sex', '女')->get();
      $message = "女性の検索が完了しました";
    } else {
      $users = null;
      $message = "検索結果はありません。";
    }

    return  [$users, $message];
  }
}
