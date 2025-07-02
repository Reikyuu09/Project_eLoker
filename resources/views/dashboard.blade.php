<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Posisi</th>
            <th>Tipe Pekerjaan</th>
            <th>Pendidikan</th>
            <th>Skill</th>
            <th>Level</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($lowongan as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->tipe_pekerjaan ?? 'Tidak Diketahui' }}</td>
            <td><span class="badge bg-primary">{{ $item->tipe_pekerjaan }}</span></td>
            <td><span class="badge bg-success">{{ $item->pendidikan }}</span></td>
            <td><span class="badge bg-info text-dark">{{ $item->skill_yang_dibutuhkan }}</span></td>
            <td><span class="badge bg-warning text-dark">{{ $item->level }}</span></td>
            <td>
                @foreach (explode(',', $item->departemen) as $dept)
                    <span class="badge bg-secondary">{{ trim($dept) }}</span>
                @endforeach
            </td>
            <td>
                <a href="{{ route('lamaran.edit', $item->id) }}" class="btn btn-sm btn-danger">
                edit
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" class="text-center text-muted">Belum ada data lowongan.</td>
        </tr>
        @endforelse
    </tbody>
</table>
