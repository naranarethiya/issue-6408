<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class EmailAccountProfile extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        //
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Text::make(__('Title'), 'title')
                ->required()
                ->rules(['required']),
            Text::make(__('Title 2'), 'title')
                ->required()
                ->rules(['required']),
            Select::make(__('Select Item'), 'item')
                ->searchable()
                ->options([
                    'Item 1' => 'Item 1',
                    'Item 2' => 'Item 2',
                    'Item 3' => 'Item 3',
                    'Item 4' => 'Item 4',
                ]),
            Select::make(__('Select one more'), 'item')
                ->searchable()
                ->options([
                    'Item 5' => 'Item 5',
                    'Item 6' => 'Item 6',
                    'Item 7' => 'Item 7',
                    'Item 8' => 'Item 8',
                ]),
        ];
    }
}
