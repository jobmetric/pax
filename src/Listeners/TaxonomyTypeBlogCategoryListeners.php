<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Media\ServiceType\MediaBuilder;
use JobMetric\Metadata\ServiceType\MetadataBuilder;
use JobMetric\Pax\Events\PaxBootEvent;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Translation\ServiceType\TranslationBuilder;
use Throwable;

class TaxonomyTypeBlogCategoryListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(PaxBootEvent $event): void
    {
        // blog_category
        TaxonomyType::define('pax.blog_category')
            ->label('pax::base.taxonomy_type.blog_category.label')
            ->description('pax::base.taxonomy_type.blog_category.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('pax::base.taxonomy_type.blog_category.translation.description.label')
                        ->info('pax::base.taxonomy_type.blog_category.translation.description.info')
                        ->placeholder('pax::base.taxonomy_type.blog_category.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            })
            ->seoTranslation()
            ->url()
            ->baseMedia()
            ->media(function (MediaBuilder $mediaBuilder) {
                $mediaBuilder
                    ->collection('gallery')
                    ->mediaCollection('public')
                    ->multiple()
                    ->mimeTypes(['image'])
                    ->size('default', 500, 500)
                    ->size('thumbnail', 100, 100);
            })
            ->metadata(function (MetadataBuilder $metadataBuilder) {
                $metadataBuilder
                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                        $customFieldBuilder::number()
                            ->name('metadata[column_number]', 'column_number')
                            ->label('pax::base.taxonomy_type.blog_category.metadata.column_number.label')
                            ->info('pax::base.taxonomy_type.blog_category.metadata.column_number.info')
                            ->placeholder('pax::base.taxonomy_type.blog_category.metadata.column_number.placeholder')
                            ->disableAutoComplete()
                            ->validation('nullable|min:1|max:4');
                    });
            });
    }
}
