<?php
/**
 * Created ourMind Solution.
 * User: chamindu dilshan
 * Date: 1/26/19
 * Time: 10:11 AM
 */

namespace Blife\Rrepository;

use Illuminate\Database\Eloquent\Model;


interface BaseRepositoryInterface
{
    public function save(Model $object);

    public function saveAll(array $list);

    public function update(array $attributes, int $id): bool;

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc');

    public function find(int $id);

    public function findOneOrFail(int $id);

    public function findBy(array $data);

    public function count();

    public function findAll(array $data, int $pageSize = 10, string $orderBy = 'id', string $sortBy = 'asc');

    public function findAllByOrderBy(array $data, string $orderBy = 'id', string $sortBy = 'asc');

    public function findBySqlWithPaginate(string $data,int $pageSize = 10);

    public function findByWithSqlAndPaginate(string $data,int $pageSize = 10);

    public function findOneBy(array $data);

    public function findOneByOrFail(array $data);

    public function paginateArrayResults(array $data, int $perPage = 50);

    public function delete(int $id): bool;

    public function deleteAll(array $array,$withDetail = false): bool;
}