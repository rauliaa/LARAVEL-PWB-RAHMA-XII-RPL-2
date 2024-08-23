<?php
namespace App\Repositories;

use App\Interfaces\FilmRepositoryInterface;
use App\Models\Film; // Pastikan ini adalah model yang sesuai

class FilmRepository implements FilmRepositoryInterface
{
    /**
     * Retrieve all films.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Film::all();
    }

    /**
     * Get film by ID.
     *
     * @param int $id
     * @return \App\Models\Film
     */
    public function getById($id)
    {
        return Film::findOrFail($id);
    }

    /**
     * Store a new film.
     *
     * @param array $data
     * @return \App\Models\Film
     */
    public function store(array $data)
    {
        return Film::create($data);
    }

    /**
     * Update a film by ID.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\Film
     */
    public function update($id, array $data)
    {
        $film = $this->getById($id);
        $film->update($data);
        return $film;
    }

    /**
     * Delete a film by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        $film = $this->getById($id);
        return $film->delete();
    }
}
