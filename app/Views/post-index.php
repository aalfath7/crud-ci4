<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<h1 class="text-3xl font-bold mb-5">Post</h1>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    title
                </th>
                <th scope="col" class="px-6 py-3">
                    content
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $post['id']; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $post['title']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $post['content']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection('content'); ?>