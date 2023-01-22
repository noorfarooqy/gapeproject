<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class WhoWeAre extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\WhoWeAre>
     */
    public static $model = \App\Models\WhoWeAre::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Small title','small_title'),
            Text::make('Big title','big_title'),
            Text::make('Sub title','sub_title'),
            Textarea::make('Description','description'),
            Text::make('Tagline one title','tagline_one_title'),
            Textarea::make('Tagline one description','tagline_one_description'),
            Text::make('Tagline two title','tagline_two_title'),
            Textarea::make('Tagline two description','tagline_two_description'),
            Text::make('Tagline three title','tagline_three_title'),
            Textarea::make('Tagline three description','tagline_three_description'),
            Image::make('Left image', 'left_image'),
            Text::make('Left title', 'left_title'),
            Text::make('Left Description', 'left_description')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
