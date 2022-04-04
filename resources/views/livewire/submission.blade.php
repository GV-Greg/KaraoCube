<div>
    <tr class="my-1 bg-blueGray-600 hover:bg-green-700 md:text-lg text-sm">
        <td class="pl-2 md:pt-1 md:pb-2 pt-2 pb-3 border-4 border-r-0 border-blueGray-800">{{ $submission->id }}</td>
        <td class="pl-2 md:pt-1 md:pb-2 pt-2 pb-3 border-4 border-l-0 border-r-0 border-blueGray-800 text-center">{{ $submission->singer }}</td>
        <td class="pl-2 md:pt-1 md:pb-2 pt-2 pb-3 border-4 border-l-0 border-r-0 border-blueGray-800">{{ $submission->song }}</td>
        <td class="md:table-cell hidden md:m-0 md:pt-1 md:pb-2 pt-2 pb-3 border-4 border-l-0 border-r-0 border-blueGray-800">
            <div class="flex items-center mx-auto">
                <span class="mx-auto px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $submission->status_color }}-600 text-{{ $submission->status_color }}-50">
                    {{ $submission->status }}
                </span>
            </div>
        </td>
        <td class="md:table-cell hidden md:pt-1 md:pb-2 pt-2 pb-3 border-4 border-l-0 border-r-0 border-blueGray-800 text-center">{{ $submission->heure }}</td>
        <td class="md:pt-1 md:pb-2 pt-2 pb-3 md:pr-0 md:pr-1 pr-2 border-4 border-l-0 border-blueGray-800">
            <div class="flex items-center mx-auto">
                <a href="{{ route('submission.update', $submission->id) }}" class="mx-auto outline-none">
                    <i class="fas fa-microphone-alt-slash fa-lg text-{{ $submission->status_color }}-500"></i>
                </a>
            </div>
        </td>
    </tr>
</div>
