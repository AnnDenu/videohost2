<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\CustomPost;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class PostResource extends Resource
{
	public static string $model = App\Models\Post::class; // модель 
 
    public static string $title = 'Articles'; // название секции
 
    public static string $subTitle = 'Article Management'; // текст секции 
 
    public static array $with = ['category']; 
 
    public static bool $withPolicy = false; // авторизация
 
    public static string $orderField = 'id'; // типичная сортировка по айди 
 
    public static string $orderType = 'DESC'; // простая сортировка по типу
 
    public static int $itemsPerPage = 25;  

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
