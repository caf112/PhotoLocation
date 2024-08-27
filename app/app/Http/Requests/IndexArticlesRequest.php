<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Packages\Domain\Order\Entity\Article;
use Packages\Domain\Article\ValueObject\ID;
use Packages\Domain\Article\ValueObject\Title;
use Packages\Domain\Article\ValueObject\Photo;
use Packages\Domain\Article\ValueObject\Body;

class IndexArticlesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        ];
    }

    public function toDomain(): Article
    {
        return Article::create(
            ID::create($this->id),
            Title::createEmpty(),
            Photo::createEmpty(),
            Body::createEmpty()
        );
    }
}