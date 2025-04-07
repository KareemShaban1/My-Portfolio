<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StorePortfolioImageRequest;
use App\Http\Requests\Backend\UpdatePortfolioImageRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Yajra\DataTables\Facades\DataTables;

class MediaController extends Controller
{
    use UploadImageTrait;
    //

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $media = Media::query();
            return DataTables::of($media)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="' . $row->id . '">' . __('Edit') . '</button>
                                  <button class="btn btn-sm btn-danger delete" data-id="' . $row->id . '">' . __('Delete') . '</button>';
                })
                ->addColumn('image', function ($row) {
                    return '<img src="' . $row->getUrl() . '" width="100" height="100">';
                })
                ->addColumn('type', function ($row) {
                    $type = '';
                    switch ($row->model_type) {
                        case 'App\Models\Project':
                            $type = __('Project');
                            break;
                        case 'App\Models\Page':
                            $type = __('Page');
                            break;
                        case 'App\Models\Template':
                            $type = __('Template');
                            break;

             

                    }
                    return $type;
                })
                ->addColumn('collection_name', function ($row) {
                    $collection_name = '';
                    switch ($row->collection_name) {
                        case 'project_gallery':
                            $collection_name = __('Gallery');
                            break;
                        case 'project_image':
                            $collection_name = __('Image');
                            break;
                        case 'page_image':
                            $collection_name = __('Image');
                            break;
                        case 'page_gallery':
                            $collection_name = __('Gallery');
                            break;
                        case 'template_image':
                            $collection_name = __('Image');
                            break;
                        case 'template_gallery':
                            $collection_name = __('Gallery');
                            break;    
                    }
                    return $collection_name;
                })
                ->rawColumns(['actions', 'image', 'type', 'collection_name'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.media.index');
    }



    public function store(StorePortfolioImageRequest $request)
    {
        $portfolioImage = new PortfolioImage;
        $data = $request->except('image');
        $image_path = $this->handleOneImageUpload($request, $portfolioImage, 'image', 'portfolioImages');
        $data['main_image'] =  $image_path;
        $portfolioImage->create($data);
        return response()->json(['success' => 'Portfolio Image added successfully']);
    }

    public function edit($id)
{
    $media = Media::findOrFail($id);
    return response()->json([
        'id' => $media->id,
        'file_name' => $media->file_name,
        'image_url' => $media->getUrl() // Send image URL to modal
    ]);
}

public function update(UpdatePortfolioImageRequest $request, $id)
{
    $media = Media::findOrFail($id);

    if ($request->hasFile('image')) {
        // Get the new file
        $newFile = $request->file('image');

        // Define storage path
        $newPath = $newFile->storeAs(
            dirname($media->getPathRelativeToRoot()), // Get existing media folder
            $media->file_name, // Keep the same file name
            'media' // Use the same disk
        );

        // Update media properties if needed
        $media->size = $newFile->getSize();
        $media->mime_type = $newFile->getMimeType();
        $media->save();

        return response()->json([
            'success' => 'Image updated successfully',
            'media' => $media->getUrl()
        ]);
    }

    return response()->json(['error' => 'No image uploaded'], 400);
}





public function destroy($id)
{
    $media = Media::findOrFail($id);
    $media->delete();

    return response()->json(['success' => 'Image deleted successfully']);
}

}
