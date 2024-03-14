<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Listado de todos las categorias disponibles
     * @OA\Get (
     *     path="/api/categorias",
     *     tags={"Categorias"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="category_name",
     *                         type="string",
     *                         example="nombre de categoria"
     *                     ),
     *                 )
     *             )
     *         )
     *     )
     * )
     */

    public function index()
    {
        return Category::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     *
     * @OA\Post(
     *  path="api/categorias/store/{id}",
     *  tags={"Categorias"},
     *  @OA\Response(
     *          response=404,
     *          description="NOT FOUND",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="No se ha encontrado información disponible"),
     *          )
     *      )
     * ),

     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostrar la información de una categoria pasando un ID
     * @OA\Get (
     *     path="/api/categoria/{id}",
     *     tags={"Categorias"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Categoria ID",
     *         required=true,
     *         @OA\Schema(
     *              type="integer",
     *              format="int64",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="category_name", type="string", example="nombre de categoria"),
     *              @OA\Property(property="created_at", type="string", example="2023-02-23T00:09:16.000000Z"),
     *              @OA\Property(property="updated_at", type="string", example="2023-02-23T12:33:45.000000Z")
     *         )
     *     ),
     *      @OA\Response(
     *          response=404,
     *          description="NOT FOUND",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="No se ha encontrado información disponible"),
     *          )
     *      )
     * )
     */
    public function show(Request $request)
    {
        $category_id = $request->id;
        return Category::where('id', '=', $category_id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     *
     * @OA\Patch(
     *  path="api/categorias/update/{id}",
     *  tags={"Categorias"},
     *  @OA\Response(
     *          response=404,
     *          description="NOT FOUND",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="No se ha encontrado información disponible"),
     *          )
     *      )
     * ),
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     *
     * @OA\Delete(
     *  path="api/categorias/store/{id}",
     *  tags={"Categorias"},
     *  @OA\Response(
     *          response=404,
     *          description="NOT FOUND",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="No se ha encontrado información disponible"),
     *          )
     *      )
     * ),
     */
    public function destroy(Category $category)
    {
        //
    }
}
